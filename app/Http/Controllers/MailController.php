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

        $rules = [
            'email'                 =>  'required|email', 
            'subject'               =>  'required', 
            'body'                  =>  'required', 
            'g-recaptcha-response'  =>  'required', 
        ];

        $messages = [
            'email.required'        =>  'El email es requerido.', 
            'email.email'           =>  'Debes ingresar un email valido.', 
            'subject.required'      =>  'Debes ingresar un asunto.', 
            'body.required'         =>  'Debes ingresar un mensaje.', 
            'g-recaptcha-response.required'  =>  'El Captcha es obligatorio.', 

        ];

        $val = \Validator::make($request->all(), $rules, $messages);

        if ($val->fails()) {
            return redirect()->back()->withInput()->withErrors($val->errors());
        }

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
