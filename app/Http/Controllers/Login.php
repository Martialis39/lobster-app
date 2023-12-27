<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string']
        ]);

        

        $existing = User::where('name', $credentials['username'])->count();

        if ($existing > 0) {
            $user = User::where('name', $credentials['username'])->first();
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->route('welcome', [
                'name' => $credentials['username']
            ]);
        } else {
            return view('login', [
                'name' => $credentials['username'],
                'error' => 'No user found'
            ]);
        }
    }

    public function signup(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string']
        ]);

        
        $exists = User::where('name', $credentials['username'])->count();

        if ($exists) {
            return view('signup', [
                'name' => $credentials['username'],
                'error' => 'User already exists'
            ]);
        } else {
            $user = new User;
            $user->name = $request->username;
            $user->save();
            return redirect()->route('login', [
                'name' => $credentials['username'],
                'from_signup' => 'true'
            ]);
        }
    }
}
