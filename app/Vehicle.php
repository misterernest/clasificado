<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['name_user', 'email', 'cellphone', 'brand', 'year', 'country_origin', 'color','placa','ref_car', 'description', 'type_car', 'opcion', 'value','negociable','actual_city','actual_region','neighborhood', 'motor', 'transmision','cylinder','km', 'combustible', 'number_cylinder', 'tapiz','brakes', 'color_tapiz','cool_air', 'audio_system', 'computer', 'accesories', 'which_accesories','financiacion', 'alarm', 'insurance_policy', 'armored', 'satelite', 'photo_main', 'photo_2', 'photo_3','photo_4', 'photo_5', 'photo_6', 'photo_7', 'photo_8','photo_9','photo_10','photo_11'];
}