<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class main extends Controller
{
    public function home() {
        return view('home', [
            'pageName' => 'Home'
        ]);
    }
    public function login() {
        return view('login', [
            'pageName' => 'Log In'
        ]);
    }
    public function signup() {
        return view('signup', [
            'pageName' => 'Sign Up'
        ]);
    }
    public function register(Request $request) {

        $userData = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6']
        ]);

        $userData['password'] = bcrypt($userData['password']);

        $user = User::create($userData);

        auth()->login($user);

        return redirect('/');
    }
    public function logout(Request $request) {

        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function loginuser(Request $request) {

        $userData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);
        
        if(auth()->attempt($userData)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return redirect('/login')->withErrors([
            'main' => 'Invalid Credentials'
        ])->onlyInput('email');
    }
}
