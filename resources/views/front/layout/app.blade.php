<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Yuri Booth Profesional') }}</title>
	<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body id="top">
	<nav class="navbar navbar-expand-lg navbar-dark bg-custom-secondary py-3">
		<div class="container">
			<a class="navbar-brand" href="{{url('/')}}">
				<img src="{{ asset('assets/images/logo/logo.svg') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
				<span class="h3 ml-2 text-custom-primary">Yuri Booth</span>
			  </a>	
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<div class="mr-auto"></div>
				<ul class="navbar-nav mr-0 mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link nav-link-custom-primary active font-weight-bold" aria-current="page" href="{{url('/')}}">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link nav-link-custom-primary font-weight-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
						Produk
						</a>
						<ul class="dropdown-menu bg-custom-primary p-2" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item text-custom-secondary font-weight-bold" href="{{url('katalog')}}">Katalog</a></li>
							<div class="dropdown-divider"></div>
							<li><a class="dropdown-item text-custom-secondary font-weight-bold" href="{{url('/katalog/produk/detail')}}">Karoseri Motor</a></li>
							<li><a class="dropdown-item text-custom-secondary font-weight-bold" href="{{url('/katalog/produk/detail')}}">Kontainer</a></li>
							<li><a class="dropdown-item text-custom-secondary font-weight-bold" href="{{url('/katalog/produk/detail')}}">Stand</a></li>
							<li><a class="dropdown-item text-custom-secondary font-weight-bold" href="{{url('/katalog/produk/detail')}}">Grobak</a></li>
							<li><a class="dropdown-item text-custom-secondary font-weight-bold" href="{{url('/katalog/produk/detail')}}">Partisi</a></li>
						</ul>
					</li>
					<li class="nav-item">
                    <a class="nav-link nav-link-custom-primary font-weight-bold" href="@if(Request::is('front')){{'#keunggulan'}}@else{{url('/#keunggulan')}}@endif">Keunggulan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-custom-primary font-weight-bold" href="#pemesanan">Pemesanan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	@yield('content')
	<footer class="bg-custom-primary p-2 pb-5">
		<div class="small text-center text-custom-secondary font-weight-bold">Copyright © @if(date('Y') == '2020'){{ date('Y') }}@else{{ '2020 - '.date('Y') }}@endif {{ config('app.name', 'Yuri Booth Profesional') }}</div>
	</footer>
	<a href="#top" class="back-to-top d-none" id="toTop">
		<div class="btn bg-custom-tertiary btn-sm rounded-circle text-custom-primary">
			<i class="fas fa-arrow-up"></i>
		</div>
	</a>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script>
		window.onscroll = function() {
		  if (pageYOffset < 100) {
			document.getElementById("toTop").classList.add('d-none')
			document.getElementById("toTop").classList.remove('d-block')
		  } else {
			document.getElementById("toTop").classList.remove('d-none')
			document.getElementById("toTop").classList.add('d-block')
		  }
		}
		</script>
</body>
</html>