<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medic;
use App\Models\User;

class MedicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medics = Medic::all();
        return view('medic.index', compact('medics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = User::where('role', 'TenagaMedis')->get();
        $medic = Medic::all();
        return view('medic.create', compact('medic', 'parents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'iduser' => 'required|string',
            'spesialisasi' => 'required|string',
            'contact' => 'required|string',
            'idmedis' => 'required|string',
        ]);

        Medic::create($validated);
        return redirect('medic')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $medis = Medic::where('idmedis', $id)->first();
        return view('medic.show', compact('medis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $parents = User::where('role', 'TenagaMedis')->get();
        $medis = Medic::findOrFail($id); // Medic harus merupakan model
        return view('medic.edit', compact('medis', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'idmedis' => 'required|string|max:100',
            'iduser' => 'required|string|max:100',
            'spesialisasi' => 'required|string|max:100',
            'contact' => 'required|string',
        ]);

        $medis = Medic::findOrFail($id);
        $medis->update($data);

        return redirect('/medic')->with('update', 'Data Berhasil di Perbarui');
    }



    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medic $idmedis)
    {
        // Hapus data
        $idmedis->delete();
        // Redirect ke halaman index dengan pesan sukses
        return redirect('medic')->with('delete', 'Data Berhasil di Hapus!');
    }
}
