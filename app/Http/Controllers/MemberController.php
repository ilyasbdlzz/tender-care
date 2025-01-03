<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = User::where('role', 'parent')->get();
        return view('member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $member = User::all();
        return view('member.create', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'contact' => 'required|string',
            'password' => 'required|string',
        ]);

        User::create($validated);
        return redirect('member')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = User::where('id', $id)->first();
        return view('member.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $member = User::findOrFail($id); // member harus merupakan model
        return view('member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $member)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'contact' => 'required|string',
        ]);

        $member->update($data);
        return redirect('/member')->with('update', 'Tugas Berhasil di Perbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $id)
    {
        // Hapus data
        $id->delete();
        // Redirect ke halaman index dengan pesan sukses
        return redirect('member')->with('delete', 'Tugas Berhasil di Hapus!');
    }
}
