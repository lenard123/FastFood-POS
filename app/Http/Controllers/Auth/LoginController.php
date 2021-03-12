<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use \App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	public function __invoke(LoginRequest $request)
	{
		$credentials = $request->only('email', 'password');

		if (Auth::attempt($credentials))
		{
			$request->session()->regenerate();
			return redirect()->intended('/admin');
		}
		return back()->withErrors([
     	   'email' => 'The provided credentials do not match our records.',
		]);
	}
}
