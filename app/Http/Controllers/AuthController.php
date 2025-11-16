<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index()
    {
        // Show the login page
        return view('modules.auth.login');
    }

    public function logar(Request $request)
    {
        // Handle user login
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }

    public function registro(Request $request)
    {
        // Handle user Registration
        return view('modules.auth.registro');
    }

    public function registrar(Request $request)
    {
        // Handle user Registration
        $User = new User();
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->password = Hash::make($request->input('password'));
        $User->save();

        return redirect()->route('login');
    }
    public function home()
    {
        // Show the home page after login
        return view('modules.dashboard.home');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
