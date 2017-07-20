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

    $dataForm = $request->except($nameFields);

    $isUploadImage = false;
    $publicPath = "images_upload/";  
    $dir = "images_" . uniqid();
    $i = 0;

    $imagePaths = [];

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
              $image->move($publicPath . $dir, $fileName);
              $routeImage = $publicPath . $dir . '/' . $fileName;
              array_push($imagePaths, $routeImage);
              $dataForm[$nameFields[$i]] = $routeImage;
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

    if ($isUploadImage) 
    {
      // Se valida que el registro se inserte correctamente
      if (Vehicle::create($dataForm)) 
      {
        return ["success" => 1];
      }
      // Sino se inserta el registro en la base de datos se eliminan las imagenes que se habían almacenado 
      else 
      {
        foreach ($imagePaths as $value) 
        {
          \File::delete($value);
        }

        if (file_exists($publicPath . $dir)) 
        {
          rmdir($publicPath . $dir);
        }
        return redirect('/vehicles')->with('error-messages', 'Hubo un error guardando la información en la base de datos ');
      }
    }

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
