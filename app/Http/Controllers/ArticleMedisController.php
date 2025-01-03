<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class articlemedisController extends Controller
{
    // Display a listing of articles
    public function index()
    {
        $user = Auth::user(); // Get the logged-in user
        $articles = Article::where('iduser', $user->id)->with(['user'])->get(); // Fetch articles created by the logged-in user
        return view('medis.artikel.index', compact('articles')); // Return the view with filtered articles
    }

    // Show the form to create a new article
    public function create()
    {
        $users = User::whereIn('role', ['Admin', 'TenagaMedis'])->get(); // Fetch all users for selection
        return view('medis.artikel.create', compact('users')); // Return the view with users data

    }

    // Store a newly created article
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'iduser' => 'required|exists:users,id',
        ]);

        Article::create($validated);
        return redirect('articlemedis')->with('pesan', 'Data Berhasil Ditambah');
    }

    // Show the form to edit an existing article
    public function edit($id)
    {
        $article = Article::findOrFail($id); // Fetch the article to be edited
        $users = User::all(); // Fetch all users for selection
        return view('medis.artikel.edit', compact('article', 'users')); // Return the view with article and users
    }

    // Update the edited article
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'iduser' => 'required|exists:users,id',
        ]);

        $article = Article::findOrFail($id);
        $article->update($validated);
        return redirect('/articlemedis')->with('update', 'Artikel berhasil diperbarui.');
    }

    // Display a single article
    public function show($id) {}

    // Delete the article
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articlemedis')->with('delete', 'Artikel berhasil dihapus!');
    }
}
