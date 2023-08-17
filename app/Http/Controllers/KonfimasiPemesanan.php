<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class KonfimasiPemesanan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dataPesan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'checkin' => 'required',
            'nohp' => 'required',
            'biaya' => 'required',
            'jumlah' => 'required'

        ]);


        Pesan::create($validasi);

        return redirect('/datapesan')->with('success', 'Tambah Data Post Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesan $pesan)
    {
        //
    }
}