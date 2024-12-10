<?php

namespace App\Http\Controllers;

use App\Mail\AdminToUserMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BackController extends Controller
{
   
    public function index()
    {
        return view('back.backHome'); 
    }
    public function sendBackContactMessage(Request $request, $userId)
    {
    
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $user = User::findOrFail($userId);

        $details = [
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        Mail::to($user->email)->send(new AdminToUserMail($details, 'emails.adminToUser'));
        return redirect()->back()->with('success', 'Mensaje enviado al usuario correctamente');
    }
}
