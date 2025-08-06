<?php

namespace App\Http\Controllers;

// use App\Mail\NewContactMessageMail; // On commente car on ne l'utilise pas pour l'instant
use App\Models\ContactMessage;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail; // On commente car on ne l'utilise pas pour l'instant

class PublicContactController extends Controller
{
    public function show()
    {
        return view('public.contact.show');
    }

    public function store(Request $request)
    {
        // 1. Validation (inchangée)
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // 2. Sauvegarde en base de données (inchangée)
        ContactMessage::create($validatedData);

        // 3. Envoi de l'email (partie commentée)
        /*
        try {
            // Remplacez 'votre.email@domaine.com' par l'email de votre client quand vous l'aurez
            Mail::to('votre.email@domaine.com')->send(new NewContactMessageMail($validatedData));
        } catch (\Exception $e) {
            // Log::error("Erreur d'envoi d'email de contact: " . $e->getMessage());
        }
        */

        // 4. Redirection avec un message de succès (inchangée)
        return redirect()->route('contact.show')
                         ->with('success', 'Votre message a bien été reçu. Nous vous répondrons dans les plus brefs délais.');
    }
}