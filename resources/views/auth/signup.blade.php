@extends('layouts.all')

	@section('content')
	    <!-- signup -->
	    <section class="container my-5">
	    	<h1 class="text-center my-2 custom-text-main text-uppercase">SIGN UP</h1>

	    	<form class="needs-validation " novalidate id="signup-form" action="{{ route('register') }}" method="post">
	    		@csrf

				<div class="my-2">
					<label for="user-name" class="col-form-label">Name <i class="far fa-address-book"></i></label>
					<input id="user-name" class="form-control rounded-pill  @error('name') is-invalid @elseif(old('name')) is-valid @enderror" type="text" name="name" placeholder="Ahmed" pattern="^[a-zA-Z ]+$" title="Your name must be in English character only" autofocus autocomplete="on" required value="{{ old('name') }}">
					<span class="invalid-feedback ms-3" role="alert">
						@error('name')
							<strong>{{ $message }}</strong>
						@else
							<strong>Your name must be in English character only</strong>
						@enderror
					</span>
				</div>

				<div class="my-2">
					<label for="user-email" class="col-form-label">Email <i class="far fa-envelope"></i></label>
					<input id="user-email" class="form-control rounded-pill @error('email') is-invalid @elseif(old('email')) is-valid @enderror" type="email" name="email" placeholder="name@domain-name.com" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$"
					title="Your email must be like that name@domain-name.com" autocomplete="on" required value="{{ old('email') }}">
					<span class="invalid-feedback ms-3">
						@error('email')
							<strong>{{ $message }}</strong>
						@else
							<strong>Your email must be like that name@domain-name.com</strong>
						@enderror
					</span>
				</div>


				<div class="my-2">
					<label for="password" class="col-form-label ">Password <i class="fas fa-key"></i></label>
					<input id="password" class="form-control rounded-pill @error('password') is-invalid @enderror" type="password" name="password" placeholder="*****" pattern="^.{8,}$" title="Your password must be 8 caharacters at least" required value="">
					<span class="invalid-feedback ms-3">
						@error('password')
							<strong>{{ $message }}</strong>
						@else
							<strong>Your password must be 8 caharacters at least</strong>
						@enderror
					</span>
				</div>

				<div class="my-2">
					<label for="password-confirm" class="col-form-label ">Confirm Password <i class="fas fa-lock"></i></label>
					<input id="password-confirm" class="form-control rounded-pill @error('password') is-invalid @enderror" type="password" name="password_confirmation" placeholder="*****" pattern="^.{8,}$"
						title="confirm password must match the password." required value="">
					<span class="invalid-feedback ms-3">
						@error('password')
							<strong>{{ $message }}</strong>
						@else
							<strong>confirm password must match the password</strong>
						@enderror
					</span>
				</div>

				<div class="form-group text-center mt-4">
					<button class="btn main-btn rounded-pill" type="submit" >Sign Up <i class="fas fa-user-plus"></i></button>
				</div>

			</form>

	    </section>
	    <!-- end signup -->
	@endsection

  	@section('js')
  		<script src="{{ asset('js/validation.js')}}" ></script>
  	@endsection
