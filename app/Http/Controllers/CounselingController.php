<?php

namespace App\Http\Controllers;

use App\Models\Counseling;
use App\Models\Medic;
use Illuminate\Http\Request;

class CounselingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counseling = Counseling::with('medic')->get();
        return view('user.appointmentstatus', compact('counseling'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $counselings = Medic::all();
        return view('user.appointment', compact('counselings'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'iduser' => 'required|string',
            'medis_id' => 'required|string', // Medic ID
            'clock' => 'required|string',
            'status' => 'required|in:Pending,Approved,Rejected',
            'date' => 'required|date',
        ]);

        Counseling::create($validated);
        return redirect()->route('appointmentstatus')->with('pesan', 'Data Berhasil di Tambah');
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
