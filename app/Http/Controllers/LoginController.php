<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'tittle' => 'Login'
        ]);
    }

    public function Logika(Request $request)
    {
        // dd($request->all());
        $Validasi = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($Validasi)) {

            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginFailed', 'Username Dan Password Salah');
    }
}
