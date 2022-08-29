<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $validated = $request->validated();

        Auth::login($user = User::create([
            'name'      => $validated['name'],
            'phone'     => $validated['phone'],
            'username'  => $validated['phone'],
            'password'  => convert_uuencode($validated['password']),
        ]));

        event(new Registered($user));

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
