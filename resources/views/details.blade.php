@extends('layouts.all')

	@section('content')
	<div class="container">
		<div class="row my-5">

				  <div class="col-md-12">
							<h3 class="card-title text-start custom-text-main text-uppercase">{{$article->title}}</h3>
							@if($article->category)
								<h6 class="card-title text-start">{{$article->category->name ?? ' '}}</h6>
							@endif
            	<img class="img-fluid detail-image" src="{{URL::asset($article->image)}}"/>
          		<p class="my-3 text-wrap lead text-justify"> {{ $article->content }} </p>
		    	</div>
					<div class="col-md-12">
							<form class="needs-validation text-start" novalidate action="{{route('add_comment',[$article->id])}}" method="post">
									@csrf
									<div class="mb-4">
											<label for="user-comment" class="col-form-label">Comment <i class="far fa-comment-dots"></i></label>
											<textarea id="user-comment" class="form-control @error('comment') is-invalid @elseif(old('comment')) is-valid @enderror" name="comment" placeholder="In my opinon ..." pattern="^([a-zA-Z0-9\-_,\.:\/\(\)& ]{3,})+$" title="Your comment must be in English character only, numbers and characters(- , _ : () / & .) and at least 3 characters"
												 autocomplete="on" required value="{{ old('comment') }}"></textarea>
											<div class="invalid-feedback">
												@error('comment')
													<strong>{{ $message }}</strong>
												@else
													<strong> Your comment must be in English character only, numbers and characters(- , _ : () / & .) and at least 3 characters
													</strong>
												@endif
											</div>
									</div>
									<div class="form-group text-end">
											<button class="btn main-btn" type="submit" >Share <i class="fas fa-share"></i></button>
									</div>
							</form>
					</div>

					<div class="col-md-12 my-4">
							@if(isset($comments))
								 @foreach($comments as $comment)
										<div class="custom-card mb-4">
											<div class="custom-card-body">
												<blockquote class="blockquote">
													<p>{{$comment->comment}}</p>
													<footer class="blockquote-footer">
														<b>{{$comment->user->name ?? ' '}} </b>
														<cite title="Source Title" class="small">{{$comment->created_at}}</cite>
													</footer>
												</blockquote>
											</div>
					           </div>
					     		@endforeach
						 		@endif
							 <div class="d-flex my-3 justify-content-center">
								 	@if(isset($comments))
						    		{{ $comments->links() }}
									@endif
						   </div>
						</div>
		</div>
    <!-- end row -->
  </div>
	@endsection

	@section('js')
		<script src="{{ asset('js/validation.js')}}"></script>
	@endsection
