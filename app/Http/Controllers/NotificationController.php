<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function submitNotification(Request $request){

        $validatedData = $request->validate([
            'notification-type' => 'required',
            'notification' => 'required|max:50',
        ]);

        $notification = new Notification();

        $notification->type = $validatedData['notification-type'];
        $notification->notification = $validatedData['notification'];

        $notification->save();

        return redirect()->route('admin-panel');
    }

    public function getNotifications(){
        $notifications = Notification::orderBy('created_at', 'desc')->get();

        return $notifications;
    }
}
