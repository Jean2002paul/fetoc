<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class PublicArticleController extends Controller
{
    /**
     * Affiche la liste des articles publiés.
     */
    public function index()
    {
        // On récupère uniquement les articles publiés (is_published = true)
        // On les trie par date de publication, la plus récente en premier
        $articles = Article::where('is_published', true)
                           ->latest('published_at')
                           ->paginate(9); // On affiche 9 articles par page (bien pour une grille de 3x3)

        return view('public.articles.index', compact('articles'));
    }

    /**
     * Affiche un article spécifique.
     * (On le remplira plus tard)
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)
                        ->where('is_published', true)
                        ->first(); // On utilise first() au lieu de firstOrFail() pour le test

        if (!$article) {
            dd('Article non trouvé dans la base de données pour le slug : ' . $slug);
        }

        return view('public.articles.show', compact('article'));
    }
}