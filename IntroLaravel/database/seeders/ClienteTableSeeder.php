<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Alonso',
                'apellido'=>'Chavez',
                'correo'=>'chavez@gmail.com',
                'telefono'=>'4271199759'
            ],
            [
                'nombre'=>'Fernanda',
                'apellido'=>'Maldonado',
                'correo'=>'fer@gmail.com',
                'telefono'=>'4271187823'
            ],
            [
                'nombre'=>'Elvia',
                'apellido'=>'Alvarez',
                'correo'=>'elvia@gmail.com',
                'telefono'=>'1234567890'
            ]]);
    }
}
