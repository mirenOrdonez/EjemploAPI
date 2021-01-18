<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Usuarios::truncate(); //vacía la tabla de Usuarios

        $faker = \Faker\Factory::create('es_ES'); //crea un Faker español
        // crea 100 Usuarios para la base de datos:
        for ($i = 0; $i < 100; $i++) {
        App\Usuarios::create([
        'nombre' => $faker->name,
        'email' => $faker->email,
        'password' => $faker->password
        ]);
        } 
    }
}
