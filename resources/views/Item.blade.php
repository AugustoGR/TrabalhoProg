@extends('layouts.applogin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Item - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->


  <!-- Page Content -->
  <div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Gutins</h1>
            <div class="list-group">
                <a href="{{url('/')}}" class="list-group-item">Destaques da Semana</a>
                <a href="{{route('Item.index')}}" class="list-group-item">Todos os Produtos</a>
                <a href="{{route('Item.show','Masculino')}}" class="list-group-item">Masculino</a>
                <a href="{{route('Item.show','Feminino')}}" class="list-group-item">Feminino</a>

            </div>

        </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
          @foreach($itens as $item)
        <div class="card mt-4">
            <a href="#"><img class="card-img-top" src="{{$item->link}}" height="400" width="700" alt=""></a>
          <div class="card-body">

            <h3 class="card-title">{{$item->nome}}</h3>

            <h4>{{$item->preco}}</h4>

            <p class="card-text">{{$item->descricao}}</p>

              <form action="{{route('Carrinho.index')}}" method="GET">

                  <input type="hidden" id="custId" name="id" value="{{$item->id}}">
                  <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
              </form>
          </div>
            @endforeach
        </div>
        <!-- /.card -->


        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
@endsection
