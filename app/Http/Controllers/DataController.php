<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    //
    public function grabVisitor(){

        if(Auth::check()){
            return redirect()->route('home');
        }

        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        $visitor = new Visitor();
        $visitor->company = 'Landed';
        $visitor->ip_address = $ipAddress;
        $visitor->device = $userAgent;

        $visitor->save();

        return view('login');
    }

    public function getHomeData(){

        $notificationController = new NotificationController;
        $portfolioEntryController = new PortfolioEntryController;
        $postController = new PostController;
        $profileImageController = new ProfileimgController;
        $referenceController = new ReferenceController;

        $notifications = $notificationController->getNotifications();
        $portfolioEntries = $portfolioEntryController->getPortfolioEntries();
        $posts = $postController->getPosts();
        $profileImage = $profileImageController->getProfileImage();
        $references = $referenceController->getReferences();

        return view('home', [
            'notifications' => $notifications,
            'portfolioEntries' => $portfolioEntries,
            'posts' => $posts,
            'profileImage' => $profileImage,
            'references' => $references,
        ]);
        
    }

    public function getBlogData($slug){

        $notificationController = new NotificationController;
        $postController = new PostController;
        $profileImageController = new ProfileimgController;

        $notifications = $notificationController->getNotifications();
        $post = $postController->getSinglePost($slug);
        $profileImage = $profileImageController->getProfileImage();

        return view('blog-view', [
            'notifications' => $notifications,
            'post' => $post,
            'profileImage' => $profileImage,
        ]);
    }
}
