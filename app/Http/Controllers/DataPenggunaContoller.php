<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataPenggunaContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboardAdmin.pengguna.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardAdmin.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validasi = $request->validate([
            'pengguna' => 'required|min:3|max:255',
            'alamat' => 'required|max:20',
            'email' => 'required|email:dns|unique:users',
            'pekerjaan' => 'required',
            'password' => 'nullable',
            'is_admin' => 'nullable'

        ]);


        User::create($validasi);

        return redirect('/pengguna')->with('success', 'Tambah Data Post Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $pengguna)
    {
        return view('dashboardAdmin.pengguna.edit', [
            'users' => $pengguna
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $pengguna)
    {
        // dd($request->all());
        $validasi = $request->validate([
            'pengguna' => 'required|max:255',
            'alamat' => 'required|max:30',
            'email' => 'required|email:dns|unique:users',
            'pekerjaan' => 'required|max:255',
            'password' => 'required|min:5|max:255',
        ]);

        $validasi['password'] = Hash::make($validasi['password']);

        // if ($validasi->fails()) {
        //     return redirect()->back()->withErrors($validasi)->withInput();
        // }

        User::where('id', $pengguna->id)
            ->update($validasi);

        return redirect('/pengguna')->with('success', 'Edit Data Pengguna Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $pengguna)
    {
        User::destroy($pengguna->id);

        return redirect('/pengguna')->with('success', 'Data Kamar Berhasil Dihapus');
    }
}
