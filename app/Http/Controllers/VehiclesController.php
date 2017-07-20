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
    // Lógica para validar datos del formulario

    // Validar que se envie al menos 1 imagen
    if (count($request->file()) == 0) 
    {
      return redirect('/vehicles')->with('error-messages', 'Debes subir al menos una imagen');
    }

    $nameFields = ['photo_main', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'photo_6', 'photo_7',  'photo_8',];

    $isUploadImage = false;
    $path = "images_upload/";  
    $dir = "images_" . uniqid();
    $i = 0;

    while ($i < count($nameFields))
    {
      if ($request->hasFile($nameFields[$i])) 
      {
        
        $image = $request->file($nameFields[$i]);
        // Se debe tener activa la extensión de php_fileinfo en el php.ini
        $mime = $image->getMimeType();
        $extension = strtolower($image->getClientOriginalExtension());
        $fileName = ($i + 1) . '.' . $extension;

        switch ($mime) 
        {
          case 'image/jpeg':
          case 'image/png':
            
            if ($image->isValid()) 
            {
              echo "Bien<br>";
              // $image->move($path . $dir, $fileName);
              // $request->$nameFields[$i] = $path . $dir . '/' . $fileName;
            }

            break;
          
          default:
            return redirect('/vehicles')->with('error-messages', 'El archivo ' . $image->getClientOriginalName() . ' no es imagen' );
            break;
        }
      
        $isUploadImage = true;
      }

      $i++;
    }

    // if ($isUploadImage) 
    // {
    //  if (Vehicle::create($request->all())) 
    //   {
    //     return ["success" => 1];
    //   } 
    //   else 
    //   {
    //     return ["success" => 0];
    //   }
    // }

    // Se obtiene le nombre del archivo
    // $name = $images[0]->getClientOriginalName();
    // \Storage::disk('local')->put($name, \File::get($images[0]));

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
