<?php

namespace App\Http\Controllers;

use App\Models\Profileimg;
use Illuminate\Http\Request;

class ProfileimgController extends Controller
{
    //
    public function updateImage(Request $request){

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $profileImage = new Profileimg();

        $imageName = 'profile_image.png';

        $imagePath = $request->image->storeAs('photos', $imageName, 'public');

        $profileImage->image_path = $imagePath;

        $profileImage->save();

        return redirect()->route('admin-panel');
    }

    public function getProfileImage(){
        $profileImage = Profileimg::orderBy('created_at', 'desc')->first();

        return $profileImage;
    }
}
