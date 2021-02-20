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
            array('name' => 'Guilherme', 'email' => 'teste@teste.com', 'password' => Hash::make('password'),));
        foreach ($usuarios as $usuario) {
            \App\Models\User::create($usuario);
        }
    }
}
