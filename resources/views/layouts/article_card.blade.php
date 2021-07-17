
		<!-- begin of product card -->
		@if(isset($article))
				<div class="col">
					<div class="card  text-center ">
							<div class="product-image-container">
								<img src="{{URL::asset($article->image)}}" class="card-img-top" alt="...">
							</div>

							<div class="card-body text-truncate">
									<a  href="{{route('details',$article->id)}}" class="card-title text-truncate h4 stretched-link">{{$article->title}}</a>
									@if($article->category)<h6 class="card-title text-muted text-truncate">{{$article->category->name ?? ' '}}</h6>@endif
									<p class="text-truncate">{{$article->content}}</p>
							</div>
					</div>
					<!-- end of product card -->
				</div>
		@endif
