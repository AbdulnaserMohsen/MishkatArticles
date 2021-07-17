@extends('layouts.all')

		@section('css')
				<meta name="csrf-token" content="{{ csrf_token() }}" />
		@endsection

		@section('content')

		<!-- begin of  articles -->
		<section class="container-fluid text-center my-5">
			<h1 class=" my-4 custom-text-main text-uppercase">Our Articles</h1>

			<div class="row ">
				<div class="col-md-3 text-start my-3">
					<div class="">
						<h4 class=" my-2 main-color text-uppercase text-center">Categories</h4>
						<ul class="list-group">
							@foreach($categories as $category)
								<li class="list-group-item text-break">
									<input class="form-check-input me-1 article" type="checkbox" value="{{$category->id}}" aria-label="" name="category[]">
									{{$category->name}}
								</li>
							@endforeach
						</ul>
					</div>
				</div>

				<div class="col-md-9 my-3">
					<div id="section-article">
						<div id="container-article">
							<div class="row row-cols-md-3 row-cols-sm-2 row-cols-1 gy-5">
								@foreach($articles as $article)
									@include('layouts.article_card')
								@endforeach
							</div>
							<div class="d-flex my-2 justify-content-center">
								{{ $articles->links() }}
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- end of row -->
		</section>
		<!-- end of articles -->

		@endsection
