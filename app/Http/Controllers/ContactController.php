<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
public function submit(Request $request)
{
    Log::info('Début du traitement du formulaire', $request->all());

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    Log::info('Données validées', $validated);

    try {
        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ];

        Log::info('Envoi de l\'email avec les données', $data);

        Mail::to('habibchabi11@gmail.com')->send(new ContactFormSubmission($data));

        Log::info('Email envoyé avec succès');

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    } catch (\Exception $e) {
        Log::error('Erreur lors de l\'envoi', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
        
        return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.');
    }
}
}