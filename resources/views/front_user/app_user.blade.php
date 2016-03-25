<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Acervo Digital, Arquivos, Fotografias, Atas, a história está aqui.">
    <meta name="author" content="Yellow Tecnologia">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <title>Acervo Digital</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/front_user/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/front_user/modern-business.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="{{ asset('/photoswipe/dist/photoswipe.css') }}" rel="stylesheet">
    <link href="{{ asset('/photoswipe/dist/default-skin/default-skin.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/photoswipe/dist/photoswipe.min.js"></script>

    <script src="/photoswipe/dist/photoswipe-ui-default.min.js"></script>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home.index')}}"><img src="/img/logo-ad.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href=" {{ url('/historia') }}">História</a>
                </li>
                <li>
                    <a href="{{url('/home/acervo/galeria')}}">Acervo</a>
                </li>
                <li>
                    <a href="{{url('/contato')}}">Contato</a>
                </li>
                <li>
                    <a href="http://www.yellowti.com">Sobre nós</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

@yield('content')

        <!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p><a href="http://www.yellowti.com"><img src="/img/logo2.png"></a></p>
        </div>
    </div>
</footer>

</div>

<!-- jQuery -->
<script src="/js/front_user/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/front_user/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
