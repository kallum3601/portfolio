<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $request){

        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        $validatedData = $request->validate([
            'company-name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $user = User::where('username', $validatedData['username'])->first();
    
        if (!$user || !Hash::check($validatedData['password'], $user->password)) {

            return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
        }
    
        $visitor = new Visitor();
        $visitor->company = $validatedData['company-name'];
        $visitor->ip_address = $ipAddress;
        $visitor->device = $userAgent;
        $visitor->save();

        Auth::login($user);
    
        return redirect()->route('home');
    }
}