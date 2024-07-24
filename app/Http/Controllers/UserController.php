<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function register(){
        return view('users.register');
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'name' => [
                'required',
                'min:3',
                'string'
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')
            ],
            'password' => [
                'required',
                'confirmed',
                'min:6'
            ]
        ], [
            'name.required' => 'The name field is required.',
            'name.min' => 'The name must be at least 3 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'password.required' => 'The password field is required.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.min' => 'The password must be at least 6 characters.'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message' , 'User Created and logged');
    }

    public function logout(Request $request){

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message' , 'you have been logged out');
    }

    public function login(){
        return view('users.login');
    }

    
    public function authenticate(Request $request){
        $formFields = $request->validate([
            
            'email' => [
                'required',
                'email',
            ],
            'password' => 'required'
            ]);

            if(auth()->attempt($formFields)){
                $request->session()->regenerate();

                return redirect('/')->with('message' , 'you are now connected');
            }

            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

}
