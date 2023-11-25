<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return redirect()->route('Showvehiculos');
        }
        return view('auth/login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)):
            return redirect()->route('ShowLogin')->withErrors('Usuario y/o contraseña incorrectas');
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);


        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('Showvehiculos');
    }

}
