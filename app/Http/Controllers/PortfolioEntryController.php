<?php

namespace App\Http\Controllers;

use App\Models\Portfolio_entry;
use Illuminate\Http\Request;

class PortfolioEntryController extends Controller
{
    //
    public function submitPortfolioEntry(Request $request){

        $validatedData = $request->validate([
            'video' => 'required|mimetypes:video/mp4,video/x-ms-wmv',
            'title' => 'required|max:50',
            'description' => 'required|max:200',
            'focus' => 'required',
            'status' => 'required',
            'build' => 'required',
            'address' => 'nullable',
            'blog' => 'nullable',
        ]);
    
        $videoName = str_replace(' ', '', $validatedData['title']) . '_' . $request->video->getClientOriginalName();
        $videoPath = $request->video->storeAs('videos', $videoName, 'public');
    
        $portfolioEntry = new Portfolio_entry();
    
        $portfolioEntry->title = $validatedData['title'];
        $portfolioEntry->blog = $validatedData['blog'];
        $portfolioEntry->description = $validatedData['description'];
        $portfolioEntry->focus = $validatedData['focus'];
        $portfolioEntry->status = $validatedData['status'];
        $portfolioEntry->build = $validatedData['build'];
        $portfolioEntry->link = $validatedData['address'];
        $portfolioEntry->video_path = $videoPath;
    
        $portfolioEntry->save();
    }

    public function getPortfolioEntries(){
        $portfolioEntries = Portfolio_entry::orderBy('created_at', 'desc')->get();

        return $portfolioEntries;
    }
}