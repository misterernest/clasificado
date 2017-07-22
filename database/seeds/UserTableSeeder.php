<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	App\User::create([
        	'name'		=>	'Luis Fernando Diaz',
        	'email'		=>	'contacto@autosdelujo.com.co',
        	'password'	=>	bcrypt('admin'),
        ]);
    }
}
