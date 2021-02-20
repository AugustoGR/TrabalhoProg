
@extends('layouts.applogin')

@section('content')
    <!DOCTYPE html>
<html lang="en">


                    <head>

                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                        <meta name="description" content="">
                        <meta name="author" content="">

                        <title>Sex Shop - Gutins</title>

                        <!-- Bootstrap core CSS -->
                        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

                        <!-- Custom styles for this template -->
                        <link href="css/shop-homepage.css" rel="stylesheet">

                    </head>

                    <body>

                    <!-- Navigation -->


                    <!-- Page Content -->
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-3">

                                <h1 class="my-4">Gutins</h1>
                                <div class="list-group">
                                    <a href="{{route('Item.index')}}" class="list-group-item">Itens em Destaque</a>
                                    <a href="{{route('Item.show',1)}}" class="list-group-item">Masculino</a>
                                    <a href="{{route('Item.show',2)}}" class="list-group-item">Feminino</a>


                                </div>

                            </div>
                            <!-- /.col-lg-3 -->

                            <div class="col-lg-9">

                                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid" src="https://cdn.discordapp.com/attachments/592511224479088655/812060068836671518/222.png" alt="First slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>


                                <!-- /.row -->

                            </div>
                            <!-- /.col-lg-9 -->

                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.container -->

                    <!-- Footer -->


                    <!-- Bootstrap core JavaScript -->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    </body>

                    </html>
@endsection
