<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Propriété publique pour stocker les données

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // On utilise l'email de l'expéditeur pour le champ "reply-to"
            replyTo: $this->data['email'],
            subject: 'Nouveau message de contact : ' . $this->data['subject'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // On dit à Laravel d'utiliser cette vue pour le corps de l'email
        return new Content(
            view: 'emails.contact-message',
        );
    }
}