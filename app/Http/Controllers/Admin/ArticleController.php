<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articles = Article::latest()->paginate(10); 
        return view('admin.articles.index', compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validation des données du formulaire
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image optionnelle, 2Mo max
            'is_published' => 'nullable|boolean',
        ]);

        // 2. Gestion de l'upload de l'image (si une image est fournie)
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        // 3. Préparation des autres données
        $validatedData['slug'] = Str::slug($validatedData['title']);
        $validatedData['is_published'] = $request->has('is_published');
        
        if ($validatedData['is_published']) {
            $validatedData['published_at'] = now();
        }

        // 4. Création de l'article en base de données
        Article::create($validatedData);

        // 5. Redirection avec un message de succès
        return redirect()->route('admin.articles.index')
                         ->with('success', 'L\'article a été créé avec succès.');
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
    public function edit(Article $article)
    {
        //
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        // 1. Validation (similaire à store, mais on autorise le titre à être le même)
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_published' => 'nullable|boolean',
        ]);

        // 2. Gestion de l'image (si une nouvelle image est fournie)
        if ($request->hasFile('image')) {
            // On supprime l'ancienne image pour ne pas encombrer le serveur
            if ($article->image_path) {
                Storage::disk('public')->delete($article->image_path);
            }
            // On stocke la nouvelle image
            $validatedData['image_path'] = $request->file('image')->store('articles', 'public');
        }

        // 3. Préparation des autres données
        $validatedData['slug'] = Str::slug($validatedData['title']);
        $validatedData['is_published'] = $request->has('is_published');

        if ($validatedData['is_published'] && !$article->published_at) {
            $validatedData['published_at'] = now();
        }

        // 4. Mise à jour de l'article
        $article->update($validatedData);

        // 5. Redirection avec un message de succès
        return redirect()->route('admin.articles.index')
                         ->with('success', 'L\'article a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        // On supprime l'image associée s'il y en a une
        if ($article->image_path) {
            Storage::disk('public')->delete($article->image_path);
        }

        // On supprime l'article de la base de données
        $article->delete();

        // On redirige avec un message de succès
        return redirect()->route('admin.articles.index')
                         ->with('success', 'L\'article a été supprimé avec succès.');
    }
}
