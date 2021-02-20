@extends('layouts.applogin')

@section('content')


	<head>

		<meta charset="utf-8" />

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
                @foreach($itens as $item)
				<div class="cart-body">

					<div class="cart-item">

						<div class="cart-row">

							<div>
                                <img src="{{$item->link}}" style="width: 75px; height: 75px;" alt="..." class="rounded-circle border-secondary">



							</div>

							<div class="cart-row-cell desc ml-3 mt-3">

								<h5>{{$item->nome}}</h5>

							</div>

							<div class="cart-row-cell quant mt-3">

								<ul>
									<li><a href="#">-</a></li>

									<li>{{$item->quantidade}}</li>

									<li><a href="#">+</a></li>
								</ul>

							</div>

							<div class="cart-row-cell amount">

								<p>{{$item->preco}}</p>

							</div>
                            <div class="mt-3" > <button  class="bg-danger ml-2 mr-2 text-white" href="#">Remover Item</button>
                            </div>

						</div>



					</div>

				</div>
                @endforeach
				<footer>


					<div class="totals">

						<p class="total-label">Subtotal</p>

						<p class="total-amount">R$13,87</p>

					</div>

					<div class="totals">

						<p class="total-label">Taxa</p>

						<p class="total-amount">R$2,00</p>

					</div>


					<div class="totals">

						<p class="total-label">Total</p>

						<p class="total-amount">R$15,87</p>

					</div>

					<button>Finalizar Compra</button>

				</footer>

			</div>

		</div>

	</body>

	@endsection

