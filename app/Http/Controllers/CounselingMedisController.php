<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counseling;
use App\Models\GrowthRecord;
use App\Models\HealthRecord;
use App\Models\Medic;
use App\Models\User;

class CounselingMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil pengguna yang sedang login
        $user = auth()->user();

        // Periksa jika pengguna adalah TenagaMedis
        if ($user->role === 'TenagaMedis') {
            // Ambil konseling yang hanya terkait dengan TenagaMedis yang bernama Ilyas Abdul Aziz
            $conselings = Counseling::whereHas('medic', function ($query) use ($user) {
                $query->where('iduser', $user->id);  // Filter berdasarkan ID pengguna yang sedang login
            })->get();
        } else {
            // Ambil semua konseling jika bukan TenagaMedis
            $conselings = Counseling::all();
        }

        return view('medis.konseling.index', compact('conselings'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = User::where('role', 'parent')->get(); // Ambil data user dengan role parent
        $conselings = Medic::all(); // Ambil semua data dari tabel medis
        return view('medis.konseling.create', compact('parents', 'conselings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi form input
        $validated = $request->validate([
            'iduser' => 'required|string',
            'medis_id' => 'required|string',
            'date' => 'required|string',
            'clock' => 'required|string',
        ]);

        Counseling::create($validated);
        return redirect('medis/konseling')->with('pesan', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $conseling = Counseling::with('users')->where('id', $id)->first();

        // Ambil data growth record berdasarkan iduser pasien
        $growths = GrowthRecord::where('iduser', $conseling->iduser)->get();
        $healths = HealthRecord::where('iduser', $conseling->iduser)->get();

        return view('medis.konseling.show', compact('conseling', 'growths', 'healths'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $conseling = Counseling::findOrFail($id);
        $parents = User::where('role', 'parent')->get(); // Ambil data user dengan role parent
        $conselings = Medic::all(); // Ambil semua data dari tabel medis
        return view('medis.konseling.edit', compact('conseling', 'parents', 'conselings'));
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
        return redirect('medis/konseling')->with('update', 'Pengajuan Konseling Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Counseling $id)
    {
        // Hapus data
        $id->delete();
        // Redirect ke halaman index dengan pesan sukses
        return redirect('medis/konseling')->with('delete', 'Data Berhasil Dihapus!');
    }
}
