<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticleAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with(['user'])->get(); // Ambil data artikel beserta relasi
        return view('article-admin.index', compact('articles'));
    }
    public function showHomepage()
    {
        $articles = \App\Models\Article::latest()->take(5)->get(); // Ambil data artikel
        return view('user.index', compact('articles')); // Kirim data ke view
    }   

    public function showArticles(Request $request)
    {
        // Query untuk artikel, termasuk filter atau sort jika ada
        $articles = Article::query();

        // Sorting berdasarkan request
        if ($request->has('sort')) {
            switch ($request->sort) {
                case 'newest':
                    $articles->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $articles->orderBy('created_at', 'asc');
                    break;
                case 'title_asc':
                    $articles->orderBy('title', 'asc');
                    break;
                case 'title_desc':
                    $articles->orderBy('title', 'desc');
                    break;
            }
        } else {
            $articles->orderBy('created_at', 'desc'); // Default sorting
        }

        // Ambil artikel dengan paginasi (misalnya 10 artikel per halaman)
        $articles = $articles->paginate(10);

        // Kirim data ke view
        return view('user.article', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = User::whereIn('role', ['Admin', 'TenagaMedis'])->get(); // Ambil Admin dan Tenaga Medis
        return view('article-admin.create', compact('parents'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'iduser' => 'required|exists:users,id', // Validasi iduser sesuai ID di tabel users
        ]);

        Article::create($validated);
        return redirect('/articleadmin')->with('pesan', 'Data Berhasil Ditambah');
    }


    /**
     * Display the specified resource.
     */
    public function detail($id)
{
    $article = Article::findOrFail($id); // Ambil artikel berdasarkan ID
    return view('user.articledetail', compact('article')); // Tampilkan halaman detail
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        $parents = User::whereIn('role', ['Admin', 'TenagaMedis'])->get();
        return view('article-admin.edit', compact('article', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'iduser' => 'required|string', // Validasi untuk ID pembuat artikel
        ]);

        $article = Article::findOrFail($id);
        $article->update($validated);
        return redirect('/articleadmin')->with('update', 'Artikel berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('/articleadmin')->with('delete', 'Artikel berhasil dihapus.');
    }
}
