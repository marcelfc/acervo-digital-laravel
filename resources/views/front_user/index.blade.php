@extends('front_user.app_user')
        @section('content')
        <!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('/img/banner/slide1.png');"></div>
            <div class="carousel-caption">
                <h2>Slide 1</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('/img/banner/slide2.png');"></div>
            <div class="carousel-caption">
                <h2>Slide 2</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('/img/banner/Slide3.png');"></div>
            <div class="carousel-caption">
                <h2>Slide 3</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">

    <form class="form-inline" id="search_index" action="/home/acervo/galeria">
        <div class="form-group ">
            <input type="text" name="search" class=" form-control col-md-10" id="search" size="60">

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i> Pesquisar no acervo</button>
        </div>

    </form>

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Bem vindo ao Acervo Digital
            </h1>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-photo"></i> Fotografias</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    <a href="/home/acervo/galeria?classificacao=fotografias" class="btn btn-warning">Visualizar <i class="fa fa-external-link"></i> </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-book"></i> Atas/Documentos </h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    <a href="/home/acervo/galeria?classificacao=ata/documento" class="btn btn-warning">Visualizar <i class="fa fa-external-link"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-file-text"></i> Jornais</h4>
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    <a href="/home/acervo/galeria?classificacao=jornais" class="btn btn-warning">Visualizar <i class="fa fa-external-link"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Novos Itens</h2>
        </div>
        @if(!empty($data))
            <div class="row">
            @foreach($data as $key => $d )
                <div class="col-sm-2 col-md-2">
                    <a href="{{ route('home.show', ['id' => $d['id']]) }}">
                        @if(substr($d['files'], -3) == 'pdf')
                            <img class="img-responsive img-portfolio img-hover" src="{{url('/img/img_pdf.png')}}" height="100" width="150" alt="">
                        @else
                            <img class="img-responsive img-portfolio img-hover" src="{{$d['files']}}" height="100" width="150" alt="">
                        @endif

                    </a>
                    <div class="caption">
                        <legend>{{$d['legendas']}}</legend>
                    </div>
                </div>
            @endforeach
            </div>
        @endif

    </div>
    <!-- /.row -->


    <hr>

    @stop
