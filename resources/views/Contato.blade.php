@extends('layouts.applogin')

@section('content')

    <div class="container mt-4">
 
    <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome:</label>
    <input type="email" class="form-control col-md-3" id="exampleFormControlInput1">
  </div>
  

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Informe aqui sua reclamação/sugestão:</label>
    <textarea class="form-control col-md-6" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
</form>
</div>
      


@endsection