<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Medic;
use App\Models\HealthRecord;
use App\Models\GrowthRecord;
use App\Models\Counseling;
use App\Models\Article;

class AdminController extends Controller
{
    public function index()
    {
        $medicCount = Medic::count();
        $healthCount = HealthRecord::count();
        $growthCount = GrowthRecord::count();
        $articleCount = Article::count();
        $counselingCount = Counseling::count();
        $memberCount = User::where('role', 'Parent')->count();
        return view('admin.index', compact('medicCount', 'healthCount', 'growthCount', 'articleCount', 'counselingCount', 'memberCount'));
    }
}