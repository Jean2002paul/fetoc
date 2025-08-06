<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Photo;
class PublicGalleryController extends Controller
{
    /**
     * Affiche la liste de tous les albums.
     */
    public function index()
    {
        // On charge les albums avec le nombre de photos et la photo la plus récente pour la couverture
        $albums = Album::withCount('photos')
                       ->with('photos:id,album_id,path') // On ne charge que les colonnes nécessaires
                       ->latest()
                       ->get()
                       ->filter(function ($album) { // On ne garde que les albums qui ont au moins une photo
                           return $album->photos_count > 0;
                       });

        return view('public.gallery.index', compact('albums'));
    }

    /**
     * Affiche les photos d'un album spécifique.
     */
    public function show($slug)
    {
        $album = Album::where('slug', $slug)
                      ->with('photos') // On charge toutes les photos de cet album
                      ->firstOrFail();

        return view('public.gallery.show', compact('album'));
    }
}
