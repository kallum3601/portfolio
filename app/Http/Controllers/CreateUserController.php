<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreateUserController extends Controller
{
    //
    public function createUser(Request $request){

        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'admin' => 'required',
        ]);

        $user = new User();

        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);
        $user->admin = $validatedData['admin'];

        $user->save();

        return redirect()->route('admin-panel');
    }
}
