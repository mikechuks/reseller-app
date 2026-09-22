<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display all notifications.
     */
    public function index()
    {
        $notifications = auth()->user()
            ->notifications()
            ->latest()
            ->paginate(10);

        return view('user_dashboard.notifications', compact('notifications'));
    }


    /**
     * Mark one notification as read.
     */
    public function markAsRead($id)
    {
        $notification = auth()->user()
            ->notifications()
            ->where('id', $id)
            ->firstOrFail();

        $notification->markAsRead();

        return redirect()->back()
            ->with('success', 'Notification marked as read.');
    }


    /**
     * Mark all notifications as read.
     */
    public function markAllAsRead()
    {
        auth()->user()
            ->unreadNotifications
            ->markAsRead();

        return redirect()->back()
            ->with('success', 'All notifications marked as read.');
    }
}