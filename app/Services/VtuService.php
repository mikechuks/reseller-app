<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Exception;

class VtuService
{
    /**
     * VTU.ng API base URL
     */
    protected string $baseUrl;

    /**
     * VTU.ng username/email
     */
    protected string $username;

    /**
     * VTU.ng password
     */
    protected string $password;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->baseUrl = config('services.vtu.base_url');
        $this->username = config('services.vtu.username');
        $this->password = config('services.vtu.password');
    }

    /**
     * Test authentication
     */
    public function testAuthentication(): array{
        $token = $this->getAccessToken();

        return [
            'success' => true,
            'message' => 'VTU.ng authentication successful.',
            'token_received' => !empty($token),
        ];
    }


    /**
     * Get authentication token from VTU.ng
     */
    protected function getAccessToken(): string
    {
        $response = Http::timeout(30)
            ->acceptJson()
            ->post($this->baseUrl . '/jwt-auth/v1/token', [
                'username' => $this->username,
                'password' => $this->password,
            ]);

        if ($response->failed()) {

            Log::error('VTU.ng Authentication Failed', [
                'status' => $response->status(),
                'response' => $response->json(),
            ]);

            throw new Exception(
                'Unable to authenticate with VTU.ng.'
            );
        }

        $data = $response->json();

        if (empty($data['token'])) {

            Log::error('VTU.ng Token Missing', [
                'response' => $data,
            ]);

            throw new Exception(
                'VTU.ng authentication token was not returned.'
            );
        }

        return $data['token'];
    }

    /**
     * Purchase Airtime
     */
    public function buyAirtime(
        string $phone,
        string $network,
        float|int $amount
    ): array {

        // Get VTU.ng access token
        $token = $this->getAccessToken();

        // Generate unique request ID
        $requestId = 'airtime_' . Str::lower(Str::random(30));

        // Send airtime purchase request
        $response = Http::timeout(30)
            ->acceptJson()
            ->withToken($token)
            ->post($this->baseUrl . '/api/v2/airtime', [
                'request_id' => $requestId,
                'phone' => $phone,
                'service_id' => strtolower($network),
                'amount' => (int) $amount,
            ]);

        // Log response
        Log::info('VTU.ng Airtime Response', [
            'request_id' => $requestId,
            'phone' => $phone,
            'network' => $network,
            'amount' => $amount,
            'status' => $response->status(),
            'response' => $response->json(),
        ]);

        // Handle HTTP errors
        if ($response->failed()) {

            Log::error('VTU.ng Airtime Request Failed', [
                'request_id' => $requestId,
                'status' => $response->status(),
                'response' => $response->json(),
            ]);

            throw new Exception(
                $response->json('message')
                ?? 'Airtime purchase request failed.'
            );
        }

        // Get response data
        $data = $response->json();

        // Return provider response
        return [
            'success' => ($data['code'] ?? null) === 'success',
            'message' => $data['message'] ?? 'Airtime request submitted.',
            'request_id' => $requestId,
            'data' => $data['data'] ?? null,
        ];
    }
}