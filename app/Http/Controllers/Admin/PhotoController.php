<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Album; // On en aura peut-être besoin
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Enregistre une ou plusieurs nouvelles photos.
     */
    public function store(Request $request)
    {
        // 1. Validation
        $request->validate([
            'album_id' => 'required|exists:albums,id', // L'album doit exister
            'photos' => 'required|array', // On attend un tableau de photos
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120', // Chaque élément du tableau doit être une image de 5Mo max
        ]);

        // 2. Boucle pour traiter chaque photo
        foreach ($request->file('photos') as $photoFile) {
            // On stocke le fichier
            $path = $photoFile->store('gallery_photos', 'public');

            // On crée l'entrée en base de données
            Photo::create([
                'album_id' => $request->album_id,
                'path' => $path,
                // On pourrait ajouter un titre ici si on avait un champ pour ça
                // 'title' => pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME),
            ]);
        }

        // 3. Redirection vers la page de l'album avec un message
        return redirect()->route('admin.albums.show', $request->album_id)
                         ->with('success', 'Photos uploadées avec succès !');
    }


    /**
     * Supprime une photo.
     */
    public function destroy(Photo $photo)
    {
        // On garde l'ID de l'album pour la redirection
        $albumId = $photo->album_id;

        // On supprime le fichier physique
        Storage::disk('public')->delete($photo->path);

        // On supprime l'enregistrement en base de données
        $photo->delete();

        // On redirige vers la page de l'album
        return redirect()->route('admin.albums.show', $albumId)
                         ->with('success', 'La photo a été supprimée.');
    }
}