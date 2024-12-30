<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $taskCount = User::count();
        $selesaiCount = User::where('status', 'Selesai')->count();
        $belumSelesaiCount = User::where('status', 'Belum Selesai')->count();
        return view('admin.dashboard', compact('taskCount', 'selesaiCount', 'belumSelesaiCount'));
    }
}
