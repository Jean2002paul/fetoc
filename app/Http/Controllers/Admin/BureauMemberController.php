<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BureauMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BureauMemberController extends Controller
{
    /**
     * Affiche la liste des membres du bureau, ordonnée par le champ 'order'.
     */
    public function index()
    {
        $members = BureauMember::orderBy('order', 'asc')->get();
        return view('admin.bureau_members.index', compact('members'));
    }

    /**
     * Affiche le formulaire de création d'un nouveau membre.
     */
    public function create()
    {
        return view('admin.bureau_members.create');
    }

    /**
     * Enregistre un nouveau membre en base de données.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'order' => 'required|integer',
            'photo_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo_path')) {
            $validatedData['photo_path'] = $request->file('photo_path')->store('bureau_photos', 'public');
        }

        BureauMember::create($validatedData);

        return redirect()->route('admin.bureau.members.index')->with('success', 'Le membre a été ajouté avec succès.');
    }

    /**
     * Affiche le formulaire pour modifier un membre existant.
     */
    public function edit(BureauMember $bureauMember)
    {
        // On renomme la variable pour plus de clarté dans la vue (ex: $member)
        return view('admin.bureau_members.edit', ['member' => $bureauMember]);
    }

    /**
     * Met à jour les informations d'un membre.
     */
    public function update(Request $request, BureauMember $bureauMember)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'order' => 'required|integer',
            'photo_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo_path')) {
            // Supprimer l'ancienne photo si elle existe
            if ($bureauMember->photo_path) {
                Storage::disk('public')->delete($bureauMember->photo_path);
            }
            // Uploader la nouvelle
            $validatedData['photo_path'] = $request->file('photo_path')->store('bureau_photos', 'public');
        }

        $bureauMember->update($validatedData);

        return redirect()->route('admin.bureau.members.index')->with('success', 'Le membre a été modifié avec succès.');
    }

    /**
     * Supprime un membre de la base de données.
     */
    public function destroy(BureauMember $bureauMember)
    {
        // Supprimer la photo associée si elle existe
        if ($bureauMember->photo_path) {
            Storage::disk('public')->delete($bureauMember->photo_path);
        }

        $bureauMember->delete();

        return redirect()->route('admin.bureau.members.index')->with('success', 'Le membre a été supprimé.');
    }
}