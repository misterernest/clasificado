<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_user', 100);
            $table->string('email', 150);
            $table->string('cellphone', 12);
            $table->string('brand', 40);
            $table->smallInteger('year');
            $table->string('country_origin');
            $table->string('color');
            $table->string('placa', 6);
            $table->string('ref_car');
            $table->text('description');
            $table->enum('type_car', ['Sedan', 'Deportivo', 'Camioneta', 'Clásico']);
            $table->enum('opcion', ['Comprar', 'Alquilar', 'Vender', 'Permutar']);
            $table->integer('value');
            $table->boolean('negociable');            
            $table->string('actual_city');
            $table->string('actual_region');
            $table->string('neighborhood');
            $table->string('motor');
            $table->enum('transmision', ['Automática','Manual','Mixta','Secuencial','Steptronic','Tiptronic']);
            $table->smallInteger('cylinder');
            $table->integer('km');
            $table->enum('combustible', ['Diesel', 'Electrico', 'Gas', 'Gasolina', 'Hibrido']);
            $table->tinyInteger('number_cylinder');
            $table->string('tapiz');
            $table->enum('brakes', ['ABS', 'Disco']);
            $table->string('color_tapiz');
            $table->boolean('cool_air');
            $table->boolean('audio_system');
            $table->boolean('computer');
            $table->boolean('accesories');
            $table->string('which_accesories');
            $table->boolean('financiacion');
            $table->boolean('alarm');
            $table->boolean('insurance_policy');
            $table->boolean('armored');
            $table->boolean('satelite');
            $table->string('photo_main');
            $table->string('photo_2');
            $table->string('photo_3');
            $table->string('photo_4');
            $table->string('photo_5');
            $table->string('photo_6');
            $table->string('photo_7');
            $table->string('photo_8');
            $table->boolean('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehicles');
    }
}
