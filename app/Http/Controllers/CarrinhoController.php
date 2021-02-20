<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        session_start();
        if(!isset($_SESSION['itens'])){
            $_SESSION['itens'] = array();
        }
        $idItem = $request->id;
        if(!isset($_SESSION['itens'][$idItem])){
            $_SESSION['itens'][$idItem] = 1;
        }else{
            $_SESSION['itens'][$idItem] += 1;
        }
        if(count($_SESSION['itens'])==0){
            echo 'carrinho vazio';
        }else{
            $carItem = 0;
            foreach ($_SESSION['itens'] as $idItem => $quantidade)
            {
                $CarItem = Item::where('id', $idItem)->get();
                echo 'nome: '.$carItem[0]->nome.'';
            }

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
