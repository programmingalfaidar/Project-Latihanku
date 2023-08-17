<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegistrasiController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'tittle' => 'Registrasi'
        ]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'pengguna' => ['required', 'min:3', 'max:255', 'unique:users'],
            'alamat' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'pekerjaan' => 'required|max:255',
            'password' => 'required|min:5|max:255',
        ]);

        // $validasi['password'] = bcrypt($validasi['password']);
        $validasi['password'] = Hash::make($validasi['password']);

        User::create($validasi);

        // $request->session()->flash('success', 'Registration Succesfull! Please Login');

        return redirect('/login')->with('success', 'Registration Succesfull! Please Login');
    }
}
