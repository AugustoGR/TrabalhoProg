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
    public function index()
    {
        return view('Carrinho');
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
        $carrinho = session()->get('carrinho');

        if(!$carrinho){
            $carrinho = [
                $request->id =>
                    [ 'nome' => $request->nome,
                        'preco' => $request->preco,
                        'quantidade' => 1,
                        'link' => $request->link

                    ]
            ];

            session()->put('carrinho',$carrinho);
            return redirect()->route('Carrinho.index')->with('success',"Item adicionado ao carrinho");

        }
        if(isset($carrinho[$request->id])){
            $carrinho[$request->id]['quantidade']++;
            session()->put('carrinho',$carrinho);
            return redirect()->route('Carrinho.index')->with('success',"Item adicionado ao carrinho");
        }
        $carrinho[$request->id] =   [ 'nome' => $request->nome,
            'preco' => $request->preco,
            'quantidade' => 1,
            'link' => $request->link

        ];
        session()->put('carrinho',$carrinho);
        return redirect()->route('Carrinho.index')->with('success',"Item adicionado ao carrinho");

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
