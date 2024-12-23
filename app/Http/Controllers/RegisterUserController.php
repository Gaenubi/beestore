<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('signin.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed']
        ]);

        $user = User::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'password' => request('password')
    ]);

        Auth::login($user);

        return redirect('/blog');
    }
}
