<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthRecord;
use App\Models\User;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_health = HealthRecord::all();
        return view('user.healthh', compact('list_health'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $healthrecords = HealthRecord::all();
        return view('user.healthrecord', compact('healthrecords'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'drug' => 'required|string',
            'allergy' => 'required|string',
            'date' => 'required|string',
        ]);
        $validated['iduser'] = auth()->user()->id;

        HealthRecord::create($validated);
        return redirect('/healthhistory')->with('pesan', 'Data Berhasil di Tambah');
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
