@extends('layouts.all')

  @section('content')
    <!-- signin -->
    <section class="container my-5">
      <h1 class="text-center my-2 custom-text-main text-uppercase">SIGN IN</h1>

      <form class="needs-validation " novalidate id="signin-form" action="{{ route('login') }}" method="post">
      	@csrf
        
				<div class="my-2">
					<label for="user-email" class="col-form-label">Email <i class="far fa-envelope"></i></label>
					<input id="user-email" class="form-control rounded-pill @error('email') is-invalid @elseif(old('email')) is-valid @enderror" type="email" name="email"
					placeholder="name@domain-name.com" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$"
					title="Your email must be like that name@domain-name.com" autocomplete="on" autofocus required value="{{ old('email') }}">
					<div class="invalid-feedback ms-3">
						@error('email')
							<strong>{{ $message }}</strong>
						@else
							<strong>Your email must be like that name@domain-name.com</strong>
						@enderror
					</div>
				</div>

				<div class="my-2">
					<label for="password" class="col-form-label ">Password <i class="fas fa-key"></i></label>
					<input id="password" class="form-control rounded-pill @error('password') 	is-invalid @enderror"type="password" name="password" placeholder="*****" 	pattern="^.{8,}$" title="Your password must be 8 caharacters at least"		required value="">
						<div class="invalid-feedback ms-3">
							@error('password')
							<strong>{{ $message }}</strong>
							@else
								<strong>Your password must be 8 caharacters at least</strong>
							@enderror
						</div>
				</div>

				<div class="form-check mt-1">
				    <input name="remember" type="checkbox" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
				    <label class="form-check-label" for="remember">Remember Me </label>
				</div>


				<div class="form-group text-center mt-4">
					<button class="btn main-btn rounded-pill" type="submit" >Sign In <i class="fas fa-sign-in-alt"></i></button>
				</div>

			</form>



    </section>
    <!-- end signin -->
  @endsection

  @section('js')
    <script src="{{ asset('js/validation.js')}}" ></script>
  @endsection
