<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrowthRecord;
use App\Models\User;

class GrowthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $growthh = GrowthRecord::all();
        return view('user.growthh', compact('growthh'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $growthrecords = GrowthRecord::all();
        return view('user.growthrecord', compact('growthrecords'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'height' => 'required|string',
            'weight' => 'required|string',
            'head' => 'required|string',
            'date' => 'required|string',
        ]);
        $validated['iduser'] = auth()->user()->id;

        GrowthRecord::create($validated);
        return redirect('/growthhistory')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
