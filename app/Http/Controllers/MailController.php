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
            'name'                  =>  'required', 
            'email_contact'         =>  'required|email', 
            'movil'                 =>  'required|numeric', 
            'subject'               =>  'required', 
            'body'                  =>  'required' 
        ];

        $messages = [
            'email_contact.required'        =>  'El email es requerido.', 
            'email_contact.email'           =>  'Debes ingresar un email valido.', 
            'subject.required'      =>  'Debes ingresar un asunto.', 
            'body.required'         =>  'Debes ingresar un mensaje.', 
            'g-recaptcha-response.required'  =>  'El Captcha es obligatorio.',
            'movil.numeric'                 =>  'El telefono debe ser numerico para contactarte'

        ];

        $val = \Validator::make($request->all(), $rules, $messages);

        if ($val->fails()) {
            return redirect('/#form-contact')->withInput()->withErrors($val->errors())->with('form-contact', 1);
        }

        $data = $request->all();

        \Mail::send('emails.message', $data, function($message) use ($request) 
        {
            // Remitente
            $message->from($request->email_contact, $request->name);

            // Asunto
            $message->subject($request->subject);


            // Receptor
            $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
        });

        return redirect('/#form-contact')->with('success-messages-contact', 'Mensaje enviado correctamente');
    }
}