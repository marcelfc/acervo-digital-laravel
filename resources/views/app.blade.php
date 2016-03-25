<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Dmitry Semenov">
	<title>Acervo Digital</title>
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>


	<link href="{{ asset('/photoswipe/dist/photoswipe.css') }}" rel="stylesheet">
	<link href="{{ asset('/photoswipe/dist/default-skin/default-skin.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


	<![endif]-->
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

	<script src="/photoswipe/dist/photoswipe.min.js"></script>

	<script src="/photoswipe/dist/photoswipe-ui-default.min.js"></script>




</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('/admin')}}"><img src="/img/logo-ad.png"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				@if (!Auth::guest())
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/admin') }}">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Acervo <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('acervo.index') }}"><span class="glyphicon glyphicon-search"></span> Vizualizar Acervo</a></li>
								<li><a href="{{ route('acervo.create') }}"><span class="glyphicon glyphicon-plus"></span> Adicionar no Acervo</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Usuários <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('user.index')}}"><span class="glyphicon glyphicon-search"></span> Vizualizar Usuários</a></li>
								<li><a href="{{route('user.create')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar Usuário</a></li>
							</ul>
						</li>
					</ul>
				@endif
				<ul class="nav navbar-nav navbar-right">
					@if (!Auth::guest())

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>

					@endif
				</ul>
			</div>
		</div>
	</nav>
	<div class = "container">
		@include('admin.partials.notifications')
		@yield('content')
	</div>

	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p><img src="/img/logo2.png"></p>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>

	<script type="text/javascript">
		var baseUrl = "{{ url('/') }}";

		Dropzone.options.myDropzone = {
			url: baseUrl + "/acervo/file_upload",
			autoProcessQueue: false,
			uploadMultiple: true,
			parallelUploads: 100,
			maxFiles: 100,
			acceptedFiles: "image/*",

			init: function () {

				var submitButton = document.querySelector("#submit-all");
				var wrapperThis = this;

				submitButton.addEventListener("click", function () {
					wrapperThis.processQueue();
				});

				this.on("addedfile", function (file) {

					// Create the remove button
					var removeButton = Dropzone.createElement("<button class='btn btn-lg dark'>Remove File</button>");

					// Listen to the click event
					removeButton.addEventListener("click", function (e) {
						// Make sure the button click doesn't submit the form:
						e.preventDefault();
						e.stopPropagation();

						// Remove the file preview.
						wrapperThis.removeFile(file);
						// If you want to the delete the file on the server as well,
						// you can do the AJAX request here.
					});

					// Add the button to the file preview element.
					file.previewElement.appendChild(removeButton);
				});

				this.on('sendingmultiple', function (data, xhr, formData) {
					formData.append("Username", $("#Username").val());
				});
			}
		};
	</script>

</body>
</html>
