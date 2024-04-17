<?php

namespace App\Http\Controllers;

use App\Models\Profileimg;
use App\Models\Visitor;
use App\Models\Testimonial;
use App\Models\Reference;

class AdminController extends Controller
{
    //
    public function getAdminData(){

        $visitors = Visitor::orderBy('created_at', 'desc')->get();
        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();
        $references = Reference::orderBy('created_at', 'desc')->get();
        $profileImage = Profileimg::orderBy('created_at', 'desc')->first();

        return view('admin-panel', [
            'visitors' => $visitors,
            'testimonials' => $testimonials,
            'references' => $references,
            'profileImage' => $profileImage,
        ]);
    }
}
