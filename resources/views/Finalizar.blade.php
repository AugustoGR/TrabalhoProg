<h2>Compra efetuada com sucesso!</h2>
<h3>Valor Total: R${{$total}} </h3>
<hr>
<h3>Itens:</h3>


@foreach($carrinho as $carro)

    <p>Nome: {{$carro['nome']}} </p>
    <p>Quantidade: {{$carro['quantidade']}} </p>
    <p>Preço Unitário: {{$carro['preco']}} </p>
    <hr>

@endforeach


