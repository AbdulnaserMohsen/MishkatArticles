


		<!-- footer -->
		<footer class="container-fluid footer text-md-start text-center ">
			<div class="row  row-cols-md-3 row-cols-sm-2 row-cols-1">

				<div class="my-5">
					<h3 class="custom-text-main">About Us</h3>
					<p class="text-dark">A lot of important articles here</p>
					<p class="text-dark">You can find us with visiting one of our  branches or contact us remotely in:</p>
					<a href="#" class=""><i class="social fab fa-twitter"></i></a>
					<a href="#" class=""><i class="social fab fa-google-plus-g"></i></a>
					<a href="#" class=""><i class="social fab fa-facebook"></i></a>
					<a href="#" class=""><i class="social fab fa-linkedin-in"></i></a>
					<a href="#" class=""><i class="social fab fa-instagram"></i></a>
					<p class="text-dark" ><i class="social far fa-envelope"></i> crossworld@crossworld.com</p>
					<p class="text-dark" ><i class="social fas fa-mobile-alt"></i> +0201700000000</p>
					<p class="text-dark" ><i class="social fab fa-whatsapp"></i> +0201700000000</p>
					<p class="text-dark" ><i class="social fas fa-phone-alt"></i> +020882300000</p>
				</div>

				<div class="my-5">
					<h3 class="custom-text-main">Branches </h3>
					<div class="row">
							<a class="text-dark d-block" href="https://goo.gl/maps/7WSRtdectDsKfime8" target="_blank">
								<i class="social fas fa-map-marker-alt"></i> Cairo, Egypt.
							</a>
							<p class="text-dark" ><i class="social fas fa-mobile-alt"></i> +0201700000000</p>
					</div>
				</div>

				<div class="my-5">
					<h3 class="custom-text-main">Categories</h3>
					@foreach($categories as $category)
							<p class="text-dark">{{$category->name}}</p>
					@endforeach
				</div>

			</div>
		</footer>
		<!-- end of footer -->





		<script src="{{ asset('js/jquery-3.5.1.min.js')}}" ></script>
		<script src="{{ asset('js/popper.min.js')}}" ></script>
		<script src="{{ asset('js/bootstrap.min.js')}}" ></script>
		<script src="https://cdn.rawgit.com/michalsnik/08df49a3d0c7ee90f843d20def0c3632/raw/f5c7ae6f5a4529a86693a91ff8b209f05bec118b/aos-next.js"></script>
		<script>
		AOS.init({
							duration: 1200,
							anchor:'body',
							useClassNames: true,
							initClassName: null,
							animatedClassName: 'animate__animated',
							});
		</script>
		<script src="{{ asset('js/script.js')}}" ></script>
    @yield('js')

	</body>
</html>
