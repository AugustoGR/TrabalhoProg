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
            array('nome' => 'Boneca Inflável', 'preco' => '259.99', 'descricao' => 'boneca 100% poliester', 'tipo' => 'masculino', 'link' => 'https://images-na.ssl-images-amazon.com/images/I/51orI6c%2BfJL._AC_SX425_.jpg','destaque' => '1'),
            array('nome' => 'Vibrador', 'preco' => '320.99', 'descricao' => 'possui controle remoto', 'tipo' => 'Feminino', 'link' => 'https://a-static.mlcdn.com.br/618x463/controle-remoto-para-tv-cce-lcd-led/eletromassa/2874662308/825c572eb67b68cb540fde33fdf87bcf.jpg','destaque' => '0'),
            array('nome' => 'Camisinha neon', 'preco' => '5.99', 'descricao' => 'brilha no escuro', 'tipo' => 'masculino', 'link' => 'https://araujo.vteximg.com.br/arquivos/ids/4019321-1000-1000/07898079000235.jpg?v=637411490180370000','destaque' => '1'),
            array('nome' => 'Lubrificante an#l', 'preco' => '10.99', 'descricao' => 'entra fácil', 'tipo' => 'Feminino', 'link' => 'https://8694.cdn.simplo7.net/static/8694/sku/lubrificantes-automotivos-oleo-de-motor-0w30-shell-helix-ultra-api-sn-sintetico-1lt--p-1509543414255.jpg','destaque' => '1'),);

        foreach ($itens as $item) {
           Item::create($item);
        }
    }
}
