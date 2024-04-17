<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    //
    public function submitReference(Request $request){

        $validatedData = $request->validate([
            'fullname' => 'required',
            'company' => 'required',
            'job-title' => 'required',
            'reference' => ['required'], 
            'email' => 'required',
            'phone' => '',
            'signature' => 'required|image|mimes:jpeg,png,jpg', 
            'code' => 'required',
        ]);
    
        if ($validatedData['code'] === '11146') {

            $imageName = str_replace(' ', '', $validatedData['company']) . '_' . $request->signature->getClientOriginalName();
        
            $imagePath = $request->signature->storeAs('photos', $imageName, 'public');
        
            $testimonial = new Reference();
        
            $testimonial->fullname = $validatedData['fullname'];
            $testimonial->company = $validatedData['company'];
            $testimonial->job_title = $validatedData['job-title'];
            $testimonial->reference = $validatedData['reference'];
            $testimonial->email = $validatedData['email'];
            $testimonial->phone = $validatedData['phone'];
            $testimonial->image_path = $imagePath; 
        
            $testimonial->save();
        
            return redirect()->route('submission-success');
        
        } else {
            return redirect()->back()->with('error', 'Invalid code.');
        }
    }

    public function getReferences(){
        $references = Reference::orderBy('created_at', 'desc')->get();

        return $references;
    }
}
