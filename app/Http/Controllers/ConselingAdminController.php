<?php

namespace App\Http\Controllers;

use App\Models\Counseling;
use Illuminate\Http\Request;

class ConselingAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conselings = Counseling::all();
        return view('conseling.index', compact('conselings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $conseling = Counseling::all();
        return view('conseling.create', compact('conseling'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'iduser' => 'required|string',
            'medis_id' => 'required|string',
            'date' => 'required|string',
            'clock' => 'required|string',
        ]);

        Counseling::create($validated);
        return redirect('conseling')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $conseling = Counseling::where('id', $id)->first();
        return view('conseling.show', compact('conseling'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $conseling = Counseling::findOrFail($id); // Medic harus merupakan model
        return view('conseling.edit', compact('conseling'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Counseling $conseling)
    {
        $data = $request->validate([
            'id' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'medis_id' => 'required|string|max:100',
            'date' => 'required|string',
            'clock' => 'required|string',
        ]);

        $conseling->update($data);
        return redirect('/conseling')->with('update', 'Pengajuan Konseling Berhasil di Perbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Counseling $id)
    {
        // Hapus data
        $id->delete();
        // Redirect ke halaman index dengan pesan sukses
        return redirect('conseling')->with('delete', 'Tugas Berhasil di Hapus!');
    }
}
