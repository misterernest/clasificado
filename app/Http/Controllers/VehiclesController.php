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
    // Validar datos del for
    $nameFields = ['photo_main', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'photo_6', 'photo_7',  'photo_8',];

    dd(\Input::file());

    $images = [
      $request->file('photo_main'),
      $request->file('photo_2'),
      $request->file('photo_3'),
      $request->file('photo_4'),
      $request->file('photo_5'),
      $request->file('photo_6'),
      $request->file('photo_7'),
      $request->file('photo_8')];

    // Se obtiene le nombre del archivo
    // $name = $images[0]->getClientOriginalName();
    // \Storage::disk('local')->put($name, \File::get($images[0]));

    return "Archivo guardado";


    // if (Vehicle::create($request->all())) {
    //   return ["success" => 1];
    // } else {
    //   return ["success" => 0];
    // }
  }

  public function getAllvehicles() 
  {
    $vehicles = Vehicle::all();
    return view('pages.list', ['vehicles' => $vehicles]);
  }
}
