<?php

namespace Database\Seeders;

use App\Models\Item;
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
            array('nome' => 'Boneca Inflável', 'preco' => '259,90', 'descricao' => 'boneca 100% poliester', 'tipo' => 'masculino', 'link' => 'https://images-na.ssl-images-amazon.com/images/I/51orI6c%2BfJL._AC_SX425_.jpg'),
            array('nome' => 'Vibrador', 'preco' => '320,90', 'descricao' => 'possui controle remoto', 'tipo' => 'Feminino', 'link' => 'https://a-static.mlcdn.com.br/618x463/controle-remoto-para-tv-cce-lcd-led/eletromassa/2874662308/825c572eb67b68cb540fde33fdf87bcf.jpg'),
            array('nome' => 'camisinha neom', 'preco' => '5,90', 'descricao' => 'brilha no escuro', 'tipo' => 'masculino', 'link' => 'https://araujo.vteximg.com.br/arquivos/ids/4019321-1000-1000/07898079000235.jpg?v=637411490180370000'),
            array('nome' => 'lubrificante anal', 'preco' => '10,90', 'descricao' => 'entra fácil', 'tipo' => 'Feminino', 'link' => 'https://8694.cdn.simplo7.net/static/8694/sku/lubrificantes-automotivos-oleo-de-motor-0w30-shell-helix-ultra-api-sn-sintetico-1lt--p-1509543414255.jpg'),);

        foreach ($itens as $item) {
           Item::create($item);
        }
    }
}
