<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AIPromptController extends Controller
{
    /**
     * Main AI Prompt page
     */
    public function index()
    {
        $category = Category::where('name', 'AI Prompts')->first();

        $products = Product::where('category_id', $category?->id)
                    ->where('status', 'active')
                    ->latest()
                    ->paginate(12);

        return view('user_dashboard.ai_prompt', compact('products'));
    }


    /**
     * AI Prompts
     */
    public function aiprompts()
    {
        return view('user_dashboard.ai_prompts.ai_prompts');
    }


    /**
     * Cinematic
     */
    public function cinematic()
    {
        return view('user_dashboard.ai_prompts.cinematic');
    }


    /**
     * Social Media
     */
    public function socialMedia()
    {
        return view('user_dashboard.ai_prompts.social_media');
    }


    /**
     * Education
     */
    public function education()
    {
        return view('user_dashboard.ai_prompts.education');
    }


    /**
     * Business
     */
    public function business()
    {
        return view('user_dashboard.ai_prompts.business');
    }


    /**
     * Product Ads
     */
    public function productAds()
    {
        return view('user_dashboard.ai_prompts.product_ads');
    }


    /**
     * Personal Branding
     */
    public function personalBranding()
    {
        return view('user_dashboard.ai_prompts.personal_branding');
    }


    /**
     * Storytelling
     */
    public function storytelling()
    {
        return view('user_dashboard.ai_prompts.storytelling');
    }


    /**
     * Comedy
     */
    public function comedy()
    {
        return view('user_dashboard.ai_prompts.comedy');
    }


    /**
     * Motivational
     */
    public function motivational()
    {
        return view('user_dashboard.ai_prompts.motivational');
    }


    /**
     * AI & Technology
     */
    public function aiTechnology()
    {
        return view('user_dashboard.ai_prompts.ai_technology');
    }


    /**
     * Coding & Programming
     */
    public function codingProgramming()
    {
        return view('user_dashboard.ai_prompts.coding_programming');
    }


    /**
     * Money & Finance
     */
    public function moneyFinance()
    {
        return view('user_dashboard.ai_prompts.money_finance');
    }


    /**
     * Lifestyle
     */
    public function lifestyle()
    {
        return view('user_dashboard.ai_prompts.lifestyle');
    }


    /**
     * Food
     */
    public function food()
    {
        return view('user_dashboard.ai_prompts.food');
    }


    /**
     * Gaming
     */
    public function gaming()
    {
        return view('user_dashboard.ai_prompts.gaming');
    }


    /**
     * Fashion
     */
    public function fashion()
    {
        return view('user_dashboard.ai_prompts.fashion');
    }


    /**
     * Fitness
     */
    public function fitness()
    {
        return view('user_dashboard.ai_prompts.fitness');
    }


    /**
     * Music
     */
    public function music()
    {
        return view('user_dashboard.ai_prompts.music');
    }


    /**
     * Faceless Video
     */
    public function facelessVideo()
    {
        return view('user_dashboard.ai_prompts.faceless_video');
    }


    /**
     * News
     */
    public function news()
    {
        return view('user_dashboard.ai_prompts.news');
    }


    /**
     * Documentary
     */
    public function documentary()
    {
        return view('user_dashboard.ai_prompts.documentary');
    }


    /**
     * Fantasy
     */
    public function fantasy()
    {
        return view('user_dashboard.ai_prompts.fantasy');
    }


    /**
     * Sci-Fi
     */
    public function sciFi()
    {
        return view('user_dashboard.ai_prompts.sci_fi');
    }


    /**
     * Horror
     */
    public function horror()
    {
        return view('user_dashboard.ai_prompts.horror');
    }


    /**
     * Romance
     */
    public function romance()
    {
        return view('user_dashboard.ai_prompts.romance');
    }


    /**
     * Kids & Animation
     */
    public function kidsAnimation()
    {
        return view('user_dashboard.ai_prompts.kids_animation');
    }
}