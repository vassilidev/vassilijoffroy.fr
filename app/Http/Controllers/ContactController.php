<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Traite le formulaire de contact, envoie le mail et redirige.
     */
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'phone'    => 'required|string',
            'city'     => 'required|string',
            'service'  => 'nullable|string',
            'problem'  => 'required|string',
            'urgency'  => 'required|string',
        ]);

        Mail::to('vassilidevnet@gmail.com')->send(new Contact($data));

        // 3. Redirection avec message de confirmation en session
        return redirect()
            ->back()
            ->with('success', 'Merci ! Votre demande a bien été envoyée, je reviens vers vous sous peu.');
    }
}
