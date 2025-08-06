<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    /**
     * Affiche la liste des albums.
     */
    public function index()
    {
        $albums = Album::withCount('photos')->latest()->paginate(10);
        return view('admin.albums.index', compact('albums'));
    }

    /**
     * Affiche le formulaire de création d'album.
     */
    public function create()
    {
        return view('admin.albums.create');
    }

    /**
     * Enregistre un nouvel album en base de données.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:albums',
            'description' => 'nullable|string',
        ]);

        $validatedData['slug'] = Str::slug($validatedData['name']);

        Album::create($validatedData);

        return redirect()->route('admin.albums.index')->with('success', 'L\'album a été créé avec succès.');
    }

    /**
     * Affiche la page d'un album avec la liste de ses photos.
     * (On utilisera cette page comme "détail" de l'album)
     */
    public function show(Album $album)
    {
        // On charge les photos de l'album pour les afficher
        $album->load('photos');
        return view('admin.albums.show', compact('album'));
    }

    /**
     * Affiche le formulaire d'édition d'album.
     */
    public function edit(Album $album)
    {
        return view('admin.albums.edit', compact('album'));
    }

    /**
     * Met à jour un album en base de données.
     */
    public function update(Request $request, Album $album)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:albums,name,' . $album->id,
            'description' => 'nullable|string',
        ]);

        $validatedData['slug'] = Str::slug($validatedData['name']);

        $album->update($validatedData);

        return redirect()->route('admin.albums.index')->with('success', 'L\'album a été modifié avec succès.');
    }

    /**
     * Supprime un album (et ses photos grâce au onDelete('cascade')).
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('admin.albums.index')->with('success', 'L\'album et toutes ses photos ont été supprimés.');
    }
}