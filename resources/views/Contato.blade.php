@extends('layouts.applogin')

@section('content')

    <div class="container mt-4">

    <form action="{{route('Contato.index')}}" method="POST">
        @CSRF

        <div class="h2 form-group mb-4">
            Fale Conosco!
        </div>



        @if($msg = Session::get('sucesso'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Contato enviado com sucesso!</h4>
                <p>Sua dúvida já foi enviada para nossa equipe de contado, em breve lhe responderemos</p>
            </div>
        @endif




  <div class="form-group">
    <label for="exampleFormControlInput1">Nome:</label>
    <input type="text" name="nome" class="form-control col-md-3" id="exampleFormControlInput1">
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Informe aqui sua reclamação/sugestão:</label>
    <textarea name="texto" class="form-control col-md-6" id="exampleFormControlTextarea1" rows="5" placeholder="Informe aqui o que deseja contatar!"></textarea>
  </div>
        <button type="button" type="submit" class="btn btn-success">Enviar</button>
</form>
</div>



@endsection
