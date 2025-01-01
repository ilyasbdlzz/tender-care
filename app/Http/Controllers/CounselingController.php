<?php

namespace App\Http\Controllers;

use App\Models\Counseling;
use Illuminate\Http\Request;

class CounselingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counseling = Counseling::all();
        return view('user.appointmentstatus', compact('counseling'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $counselings = Counseling::all();
        return view('user.appointment', compact('counselings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'iduser' => 'required|string',
            'idtenagamedis' => 'required|date',
            'clock' => 'required|string',
            'status' => 'required|in:Pending,Approved,Rejected',
            'date' => 'required|date',
        ]);

        $pengajuan_cuti = Counseling::find($id);
        $pengajuan_cuti->update($validated);
        return redirect('dashboard/pengajuan_cuti')->with('update', 'Data Berhasil di Perbarui');
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
