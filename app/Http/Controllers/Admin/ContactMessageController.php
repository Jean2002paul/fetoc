<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Affiche la liste des messages de contact.
     */
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(15);
        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Affiche un message spécifique.
     */
    public function show(ContactMessage $message)
    {
        // On marque le message comme "lu" dès qu'on l'ouvre
        if (!$message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('admin.messages.show', compact('message'));
    }

    /**
     * Supprime un message.
     */
    public function destroy(ContactMessage $message)
    {
        $message->delete();
        return redirect()->route('admin.messages.index')->with('success', 'Le message a été supprimé.');
    }
}