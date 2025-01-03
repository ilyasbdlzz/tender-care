<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthRecord;
use App\Models\User;

class HealthAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $healths = HealthRecord::all();
        return view('health-admin.index', compact('healths'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = User::where('role', 'parent')->get(); // Ambil data user dengan role parent
        $health = HealthRecord::all();
        return view('health-admin.create', compact('health', 'parents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'iduser' => 'required|string',
            'drug' => 'required|string',
            'allergy' => 'required|string',
            'date' => 'required|string',
        ]);

        HealthRecord::create($validated);
        return redirect('/health')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $health = HealthRecord::where('id', $id)->first();
        return view('health-admin.show', compact('health'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $health = HealthRecord::findOrFail($id); // Medic harus merupakan model
        $parents = User::where('role', 'parent')->get(); // Ambil data user dengan role parent
        return view('health-admin.edit', compact('health', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HealthRecord $health)
    {
        $data = $request->validate([
            'iduser' => 'required|string',
            'drug' => 'required|string',
            'allergy' => 'required|string',
            'date' => 'required|string',
        ]);

        $health->update($data);
        return redirect('/health')->with('update', 'Data Kesehatan Anak Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HealthRecord $id)
    {
        // Hapus data
        $id->delete();
        // Redirect ke halaman index dengan pesan sukses
        return redirect('health')->with('delete', 'Data Berhasil di Hapus!');
    }
}
