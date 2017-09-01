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
    return view('welcome');
  }

  public function postStore(Request $request) 
  {

    $rules = [
      'name_user'             =>  'required',
      'photo_main'            =>  'required|max:3072',
      'g-recaptcha-response'  =>  'required',
      'photo_2'               =>  'max:3072',
      'photo_3'               =>  'max:3072',
      'photo_4'               =>  'max:3072',
      'photo_5'               =>  'max:3072',
      'photo_6'               =>  'max:3072',
      'photo_7'               =>  'max:3072',
      'photo_8'               =>  'max:3072',
      'photo_9'               =>  'max:3072',
      'photo_10'               =>  'max:3072',
      'cellphone'             =>  'required|numeric',
      'email'                 =>  'required:email',
      'type_car'              =>  'in:Sedan,Deportivo,Camioneta,Clásico',
      'opcion'                =>  'in:Vender,Permutar',
      'transmission'          =>  'in:N/D, Automática,Manual,Mixta,Secuencial,Steptronic,Tiptronic',
      'combustible'           =>  'in:N/D,Diesel,Electrico,Gas,Secuencial,Gasolina,Hibrido',
      'brakes'                =>  'in:N/D,ABS,Disco',
      'year'                  =>  'numeric',
    ];

    $messages = [
      'name_user.required'    =>  'El campo :attribute requerido.', 
      'photo_main.required'   =>  'Se requiere una imagen principal.', 
      'max'                   =>  'La :attribute no debe pesar más de 3 MegaBytes.',
      'g-recaptcha-response.required'  =>  'El Captcha es obligatorio.',
      'cellphone.numeric'     =>  'El número de teléfono debe ser numérico.', 
      'cellphone.required'        =>  'El número de teléfono es obligatorio.', 
      'email.required'        =>  'El email es requerido.', 
      'email.email'           =>  'Debe ingresar un email valido.', 
      'type_car.in'           =>  'Debes elegir un tipo de carro correcto.', 
      'opcion.in'             =>  'Debes elegir un tipo de Opción correcto.', 
      'transmission.in'       =>  'Debes elegir una transmisión correcta.', 
      'combustible.in'        =>  'Debes elegir un tipo de combustible correcto.', 
      'brakes.in'             =>  'Debes elegir un tipo de freno correcto.', 
    ];

    $attributes = [
      'name_user'   =>  'Nombre', 
      'photo_main'  =>  'Imagen principal', 
      'photo_2'     =>  '2° imagen', 
      'photo_3'     =>  '3° imagen', 
      'photo_4'     =>  '4° imagen', 
      'photo_5'     =>  '5° imagen', 
      'photo_6'     =>  '6° imagen', 
      'photo_7'     =>  '7° imagen', 
      'photo_8'     =>  '8° imagen', 
      'photo_9'     =>  '9° imagen', 
      'photo_10'     =>  '10° imagen',
    ];

    $val = \Validator::make($request->all(), $rules, $messages, $attributes);

    // Se valida que el formulario haya sido diligensiado exitosamente
    if ($val->fails()) 
    {
      return redirect('/#submit-vehicle')->withInput()->withErrors($val->errors());
    }

    // Validar que se envie al menos 1 imagen
    if (count($request->file()) == 0) 
    {
      return redirect('/#button-contacto')->with('error-messages', 'Debes subir al menos una imagen')->withInput();
    }

    $nameFileFields = ['photo_main', 'photo_2', 'photo_3', 'photo_4', 
      'photo_5', 'photo_6', 'photo_7',  'photo_8',  'photo_9',  'photo_10',  'photo_11',];

    $dataForm = $request->except($nameFileFields);

    $isUploadImage = false;
    $publicPath = "images_upload/";  
    $dir = "images_" . uniqid();
    $i = 0;

    $imagePaths = [];

    while ($i < count($nameFileFields))
    {
      if ($request->hasFile($nameFileFields[$i])) 
      {
        
        $image = $request->file($nameFileFields[$i]);
        // Se debe tener activa la extensión de php_fileinfo en el php.ini
        $mime = $image->getMimeType();
        $extension = strtolower($image->getClientOriginalExtension());
        $fileName = ($i + 1) . '.' . $extension;

        switch ($mime) 
        {
          case 'image/jpeg':
          case 'image/png':
          case 'image/bmp':
          case 'image/tif':
            
            if ($image->isValid()) 
            {
              $image->move($publicPath . $dir, $fileName);
              $routeImage = $publicPath . $dir . '/' . $fileName;
              array_push($imagePaths, $routeImage);
              $dataForm[$nameFileFields[$i]] = $routeImage;
            }

            break;
          
          default:
            return redirect('/#button-contacto')->with('error-messages', 'El archivo ' . $image->getClientOriginalName() . ' no es imagen' );
            break;
        }
      
        $isUploadImage = true;
      }

      $i++;
    }

    // Si se subieron las imagenes correctamente entonces se procede a guardar el registro
    if ($isUploadImage) 
    {
      // Se valida que el registro se inserte correctamente
      if (Vehicle::create($dataForm)) 
      {
        return redirect('/#submit-vehicle')->with('success-messages', 'Vehiculo ingresado exitosamente');
      }
      // Sino se inserta el registro en la base de datos se eliminan las imagenes que se habían almacenado 
      else 
      {
        // Se eliminan cada una de las imagenes
        foreach ($imagePaths as $value) 
        {
          \File::delete($value);
        }

        // Se elimina la carpeta
        if (file_exists($publicPath . $dir)) 
        {
          rmdir($publicPath . $dir);
        }
        return redirect('/#button-contacto')->with('error-messages', 'Hubo un error guardando la información en la base de datos.<br/>Intentalo de nuevo.');
      }
    }
  }

  public function getAllvehicles() 
  {

    $vehicles = Vehicle::where('activo', '1')->get();

    // $vehicles = Vehicles::all();

    return view('list', ['vehicles' => $vehicles]);    
  }

  public function getDetail($id) 
  {
    $vehicle = Vehicle::find($id);

    if ($vehicle != null) 
    {
      return view('pages.detail', ['vehicle' => $vehicle]);
    } 
    else 
    {
      return redirect()->back()->with('error-messages', 'El vehiculo no existe');
    }
  }

  public function getDisablecar($id) 
  {
    if (\Auth::guest()) {
      return redirect('/');
    }else{
      $vehicle = Vehicle::find($id);
      if ($vehicle != null) 
      {
        $vehicle->update(['activo' => 0]);

        return redirect()->action("VehiclesController@getAllvehicles");
      } 
      else 
      {
        return redirect()->back()->with('error-messages', 'El vehiculo no existe'); 
      }        
    }
  }
}