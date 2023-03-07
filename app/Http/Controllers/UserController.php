<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    //
    public function regPage(Request $request)
    {

        return view('users.register');
    }

    public function store(Request $request)
    {
       $formField =  $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:7',
        ]);

        $formField['password'] = bcrypt($formField['password']);
        $user = User::create($formField);
        auth()->login($user);
        return back()->with('message', 'user registered successfully');
    }
    public function login(Request $request)
    {
        return view('users.login');
    }
    // login users
    public function authenticate(Request $request)
    {
        $formField =  $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if(auth()->attempt($formField)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are logged in');
        }
        
        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');


    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return back()->with('message', 'You are logged out!');

    }

}
