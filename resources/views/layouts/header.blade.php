<!doctype html>
<html lang="en" dir="ltr">
	<head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="application-name" content="Meshkat Articles">
		<meta name="description" content="website for articles ">
		<meta name="keywords" content="article, meshkat">
		<meta name="author" content="Abdulnser">

		<link rel="icon"  href="{{ asset('images/logo-ar.png') }}">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('fonts/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    @yield('css')
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	</head>

	<body>

		<header class="sticky-top"  >
			<div class="container-fluidr">
				<div class="middle-header d-flex align-items-center justify-content-between">

						<div class="col-2 m-2">
							<a class="navbar-brand " href="{{route('index')}}">
							 <img class="d-inline-block align-top animate__animated animate__heartBeat" src="{{ asset('images/logo-ar.png') }}" alt="cross world logo" >
							</a>
						</div>


						<div class="flex-grow-1 ">
							<form class="form-inline "action="{{route('article_filtering')}}" method="POST" id="search_article">
								@csrf
								<div class="input-group input-group-lg border rounded-pill border-2 ">
									<input class="form-control rounded-pill border-0" type="search" placeholder="search" name="search" value="{{$wordForSearch??''}}">
									<div class="input-group-append ">
										<button class="btn btn-lg search rounded-pill border-0 " type="submit"><i class="fas fa-search fa-flip-horizontal"></i></button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-4 col-md-2 d-flex justify-content-around text-center">
							@if(!Auth::check())
								<a href="{{route('register')}}" class="d-block @if(url()->current() == route('register')) active @endif ">
									<i class="fas fa-user-plus"></i>
									<span class="d-block text-uppercase">Sign up</span>
								</a>
								<a href="{{route('login')}}" class="d-block @if(url()->current() == route('login')) active @endif">
									<i class="fas fa-sign-in-alt"></i>
									<span class="d-block text-uppercase">Sign in</span>
								</a>
							@else
								@if(Auth::user()->type == "Admin")
									<a href="{{route('dashboard')}}" class="d-block @if (request()->is('admin/*')) active @endif" data-bs-toggle="tooltip" data-bs-placement="bottom" title="As Admin">
										<i class="fas fa-user-cog"></i>
									</a>
								@endif
								<a href="#" class="dropdown-toggle d-block " data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="profile-dropdown"><i class="fas fa-user-alt"></i></a>
								<div class="dropdown-menu  text-center" aria-labelledby="profile-dropdown" >
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
	                  document.getElementById('logout-form').submit();">
										 logout <i class="fas fa-sign-out-alt"></i>
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	                    @csrf
	                </form>
								</div>
							@endif

						</div>


				</div>
			</div>

		</header>
