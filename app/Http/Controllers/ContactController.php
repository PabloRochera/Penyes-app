<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // Asegúrate de tener un Mailable para el envío

class ContactController extends Controller
{
    // Muestra la vista de contacto
    public function show()
    {
        return view('home.contact'); 
    }

    // Maneja el envío del formulario
    public function send(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        
        Mail::to('admin@example.com')->send(new ContactFormMail($request->all()));
        return redirect()->route('contact.show')->with('success', 'Mensaje enviado correctamente');
    }
}

