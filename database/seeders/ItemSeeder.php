<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itens = array(
            array('nome' => 'Boneca Inflável', 'preco' => '259,90', 'descricao' => 'boneca 100% poliester', 'tipo' => 'masculino');
            array('nome' => 'Vibrador', 'preco' => '320,90', 'descricao' => 'possui controle remoto', 'tipo' => 'Feminino');
            array('nome' => 'camisinha neom', 'preco' => '5,90', 'descricao' => 'brilha no escuro', 'tipo' => 'masculino');
            array('nome' => 'lubrificante anal', 'preco' => '10,90', 'descricao' => 'entra fácil', 'tipo' => 'Feminino'));

        foreach ($itens as $item) {
            \App\Models\Biblioteca::create($item);
        }
    }
}
