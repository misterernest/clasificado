<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VehiclesController extends Controller
{

   public function getIndex() 
   {
        return view('pages.formulario');
   }

   public function postStore(Request $request) 
   {
        // Validar datos del form

        // Logica de las imagenes
        // $request["photo" . $i] = "";

        if (Vehicle::create($request->all())) {
            return ["success" => 1];
        } else {
            return ["success" => 0];
        }
   }

   public function getAllvehicles() 
   {
        // Validar que sea el usuario administrador

        $vehicles = Vehicle::all();
        return view('pages.list', ['vehicles' => $vehicles]);
   }
}
