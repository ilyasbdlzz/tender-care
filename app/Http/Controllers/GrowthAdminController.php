<?php

namespace App\Http\Controllers;

use App\Models\GrowthRecord;
use App\Models\User;
use Illuminate\Http\Request;

class GrowthAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $growths = GrowthRecord::all();
        return view('growth-admin.index', compact('growths'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = User::where('role', 'parent')->get(); // Ambil data user dengan role parent
        $growth = GrowthRecord::all();
        return view('growth-admin.create', compact('growth', 'parents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'iduser' => 'required|string',
            'height' => 'required|string',
            'weight' => 'required|string',
            'head' => 'required|string',
            'date' => 'required|string',
        ]);

        GrowthRecord::create($validated);
        return redirect('/growth')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $growth = GrowthRecord::where('id', $id)->first();
        return view('growth-admin.show', compact('growth'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $growth = GrowthRecord::findOrFail($id); // Medic harus merupakan model
        $parents = User::where('role', 'parent')->get(); // Ambil data user dengan role parent
        return view('growth-admin.edit', compact('growth', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GrowthRecord $growth)
    {
        $data = $request->validate([
            'iduser' => 'required|string',
            'height' => 'required|string',
            'weight' => 'required|string',
            'head' => 'required|string',
            'date' => 'required|string',
        ]);

        $growth->update($data);
        return redirect('/growth')->with('update', 'Data Pertumbuhan Anak Berhasil di Perbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GrowthRecord $id)
    {
        // Hapus data
        $id->delete();
        // Redirect ke halaman index dengan pesan sukses
        return redirect('growth')->with('delete', 'Data Berhasil di Hapus!');
    }
}
