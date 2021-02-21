<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class FinalizarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(session()->has('carrinho')) {
            $valor=$request->valor;
            $data = array('carrinho' => session()->get('carrinho'), 'total'=>$valor);
            $template_path = 'Finalizar';
                Mail::send($template_path, $data, function ($message) {
                    $message->to(auth()->user()->email)->subject('SexShop-Gutins');
                    $message->from(config('mail.from.address') , 'SexShop-Gutins');
                    $message->subject('Pagamento do seu boleto - SexShop-Gutins');
                });
            session()->forget('carrinho');
            return back()
                ->with('msg', 'Obrigado por efetuar sua compra na SexShop-Gutins!');
        }

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
