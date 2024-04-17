<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
    public function submitTestimonial(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'job-title' => 'required',
            'testimonial' => ['required', 'max:200'], 
            'reaction' => 'required',
            'photo' => 'required|image|mimes:avif,png,jpeg,jpg,webp,heic,heif',
            'code' => 'required',
        ]);
    
        if ($validatedData['code'] === '11641') {

            $imageName = str_replace(' ', '', $validatedData['company']) . '_' . time() . '.' . $request->photo->getClientOriginalExtension();
        
            $imagePath = $request->photo->storeAs('photos', $imageName, 'public');
        
            $testimonial = new Testimonial();
        
            $testimonial->name = $validatedData['name'];
            $testimonial->company = $validatedData['company'];
            $testimonial->job_title = $validatedData['job-title'];
            $testimonial->testimonial = $validatedData['testimonial'];
            $testimonial->reaction = $validatedData['reaction'];
            $testimonial->image_path = $imagePath; 
        
            $testimonial->save();
        
            return redirect()->route('submission-success');
        
        } else {
            return redirect()->back()->with('error', 'Invalid code.');
        }
    }

    public function getTestimonials(){
        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();

        return $testimonials;
    }
}
