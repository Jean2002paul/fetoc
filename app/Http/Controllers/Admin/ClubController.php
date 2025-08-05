<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::latest()->paginate(10);
        return view('admin.clubs.index', compact('clubs'));
    }

    public function create()
    {
        return view('admin.clubs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:clubs',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'website_url' => 'nullable|url|max:255',
            'contact_person' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('logo')) {
            $validatedData['logo_path'] = $request->file('logo')->store('clubs_logos', 'public');
        }

        $validatedData['is_active'] = $request->has('is_active');

        Club::create($validatedData);

        return redirect()->route('admin.clubs.index')->with('success', 'Le club a été créé avec succès.');
    }

    public function edit(Club $club)
    {
        return view('admin.clubs.edit', compact('club'));
    }

    public function update(Request $request, Club $club)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:clubs,name,' . $club->id,
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'website_url' => 'nullable|url|max:255',
            'contact_person' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('logo')) {
            if ($club->logo_path) {
                Storage::disk('public')->delete($club->logo_path);
            }
            $validatedData['logo_path'] = $request->file('logo')->store('clubs_logos', 'public');
        }

        $validatedData['is_active'] = $request->has('is_active');

        $club->update($validatedData);

        return redirect()->route('admin.clubs.index')->with('success', 'Le club a été modifié avec succès.');
    }

    public function destroy(Club $club)
    {
        if ($club->logo_path) {
            Storage::disk('public')->delete($club->logo_path);
        }
        $club->delete();
        return redirect()->route('admin.clubs.index')->with('success', 'Le club a été supprimé avec succès.');
    }
}