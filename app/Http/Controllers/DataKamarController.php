<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DataKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboardAdmin.Kamar', [
            'kamars' => Kamar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardAdmin.create', [
            'kamars' => Kamar::all()
            // 'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request->file('image')->store('data-images');
        $validasi = $request->validate([
            'image' => 'image|file|max:4024',
            'kamar' => 'required|max:255',
            'biaya' => 'required',
            'jumlah' => 'required',
            // 'category_id' => 'required',
            // 'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validasi['image'] = $request->file('image')->store('data-images');
        }

        // $validasi['user_id'] = auth()->user()->id;
        // $validasi['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Kamar::create($validasi);

        return redirect('/kamar')->with('success', 'Tambah Data Kamar Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kamar $kamar)
    {
        return view('dashboardAdmin.edit', [
            'kamars' => $kamar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kamar $kamar)
    {
        $rules = [
            "image" => 'required|max:4024',
            "kamar" => 'required',
            "biaya" => 'required',
            'jumlah' => 'required'
        ];

        if ($request->kamar != $kamar->kamar) {
            $rules['kamar'] = 'required';
        }

        $validasi = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->image) {
                Storage::delete($request->image);
            }
            $validasi['image'] = $request->file('image')->store('data-images');
        }
        Kamar::where('id', $kamar->id)
            ->update($validasi);

        // dd($validasi);
        return redirect('/kamar')->with('success', 'Data Kamar Edit Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kamar $kamar)
    {
        if ($kamar->image) {
            Storage::delete($kamar->image);
        }
        Kamar::destroy($kamar->id);

        return redirect('/kamar')->with('success', 'Data Kamar Berhasil Dihapus');
    }
}
