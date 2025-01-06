<?php

namespace App\Http\Controllers;

use App\Models\Counseling;
use App\Models\Medic;
use App\Models\User;
use Illuminate\Http\Request;

class ConselingAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conselings = Counseling::with('medic', 'users')->get();
        return view('conseling.index', compact('conselings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = User::where('role', 'parent')->get(); // Ambil data user dengan role parent
        $conselings = Medic::all(); // Ambil semua data dari tabel medis
        return view('conseling.create', compact('parents', 'conselings'));
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
        $conseling = Counseling::findOrFail($id);
        $parents = User::where('role', 'parent')->get(); // Ambil data user dengan role parent
        $conselings = Medic::all(); // Ambil semua data dari tabel medis
        return view('conseling.edit', compact('conseling', 'parents', 'conselings'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Counseling $conseling)
    {
        $data = $request->validate([
            'iduser' => 'required|string|max:100',
            'status' => 'required|string|max:100',
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
        return redirect('conseling')->with('delete', 'Data Berhasil di Hapus!');
    }
}
