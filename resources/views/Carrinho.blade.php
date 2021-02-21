@extends('layouts.applogin')

@section('content')


    <head>

        <meta charset="utf-8"/>

        <title>Carrinho de Compras</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <link href="../css/style.css" rel="stylesheet">

    </head>


    <body>
    <div class="container-xl">

        <div class="cart-container">

            <header>

                <h3>Carrinho de Compras</h3>

            </header>

            @php $total = 0; @endphp
            @if(session('carrinho'))
                @foreach(session('carrinho') as $id => $item)
                    @php
                        $sub_total = $item['preco'] * $item['quantidade'];
                        $total += $sub_total;
                    @endphp

                    <div class="cart-body">

                        <div class="cart-item">

                            <div class="cart-row">

                                <div>
                                    <img src="{{$item['link']}}" style="width: 75px; height: 75px;" alt="..."
                                         class="rounded-circle border-secondary">

                                </div>

                                <div class="cart-row-cell desc ml-3 mt-2">

                                    <span>Item:</span>
                                    <h5>{{$item['nome']}}</h5>

                                </div>

                                <div class="h4 cart-row-cell quant mt-2">
                                    <span>Quantidade:</span>
                                    <ul>

                                        <form action="{{route('Carrinho.update',[$id])}}" class="float-right h5" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="mt-3">
                                                <input type="hidden" id="custId" name="tp" value="-">
                                                <button class="bg-danger ml-2 mr-2 text-white">-</button>
                                            </div> </form>

                                        <li>{{$item['quantidade']}}</li>

                                        <form action="{{route('Carrinho.update',[$id])}}" class="float-right h5" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="mt-3">
                                                <input type="hidden" id="custId" name="tp" value="+">
                                                <button class="bg-danger ml-2 mr-2 text-white">+</button>
                                            </div> </form>
                                    </ul>

                                </div>

                                <div class="cart-row-cell amount">
                                    <span>Preço:</span>
                                    <p>R$ {{$item['preco']}}</p>

                                </div>

                                <div class="cart-row-cell amount">
                                    <span>Subtotal do Item:</span>
                                    <p>R$ {{$sub_total}}</p>

                                </div>
                                <form action="{{route('Carrinho.destroy',[$id])}}" class="float-right h5" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="mt-3">
                                        <button class="bg-danger ml-2 mr-2 text-white">Remover Item</button>
                                    </div> </form>


                            </div>


                        </div>

                    </div>


                @endforeach

            @endif


            <footer>


                <div class="totals">

                    <p class="total-label">Total</p>

                    <p class="total-amount">Total R$ {{$total}}</p>

                </div>

                <form action="{{route('Finalizar.index')}}" method="POST">
                    @CSRF
                    <input type="hidden" id="custId" name="valor" value="{{$total}}">

                    @if(count($errors) >0)
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Erro na compra!</h4>
                        </div>
                    @endif

                    @if($msg = Session::get('msg'))
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Compra efetuada com sucesso!</h4>
                            <p>{{$msg}}</p>
                        </div>
                    @endif

                    @if(session('carrinho'))<button  type="submit" class="btn btn-success">Finalizar Compra</button>
                    @endif
                </form>
            </footer>

        </div>

    </div>

    </body>

@endsection

