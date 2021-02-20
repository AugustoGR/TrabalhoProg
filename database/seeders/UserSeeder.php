<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = array(
            array('name' => 'Guilherme', 'email' => 'guilherme@teste.com', 'password' => Hash::make('123456789')),
        array('name' => 'Augusto', 'email' => 'augusto@teste.com', 'password' => Hash::make('123456789')),);
        foreach ($usuarios as $usuario) {
            User::create($usuario);
        }
    }
}
