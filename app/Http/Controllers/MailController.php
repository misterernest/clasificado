<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function index() 
    {
        return view('pages.contact');
    }

    public function send(Request $request) 
    {
        $data = $request->all();

        \Mail::send('emails.message', $data, function($message) use ($request) 
        {
            // Remitente
            $message->from($request->email, $request->name);

            // Asunto
            $message->subject($request->subject);

            // Receptor
            $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
        });

        return view('emails.success');
    }
}
