@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
@endsection

@section('admin_content')
    <h1 class="text-uppercase custom-text-main">Articles</h1>
    <!-- Button trigger modal -->
    <button class="btn main-btn rounded-pill mt-3" data-bs-toggle="modal" data-bs-target="#addNew">
        Add New Article <i class="fas fa-plus"></i>
    </button>

    <div id="data-section">
      <div id="data-container">

          <!-- Modal -->
          <div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title main-color" id="exampleModalLabel">Add New Article</h5>
                          <button type="button" class="btn custom-close" data-bs-dismiss="modal" aria-label="Close">
                              <i class="fas fa-times-circle"></i>
                          </button>
                      </div>
                      <div class="modal-body">
                          <form class="needs-validation my-5" novalidate id="add-form" action="{{route('add_article')}}"
                            method="post" enctype="multipart/form-data">
                              @csrf

                              <div class="mb-3 text-start">
  			                          <label class="col-form-label d-block" >Image <i class="far fa-image"  ></i></label>
                                  <label for="article-image" class="d-block border border-2 " >
                        							<!-- <div class="text-end" >
                        								@if(isset($cart_found->image))
                                            <a href="{{route('remove_print_img',[$cart_found->id])}}" type="button" class="btn custom-close remove-image" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Image">
                                              <i class="fas fa-times-circle"></i>
                                            </a>
                                        @endif
                                      </div> -->
                                      <img  src="{{URL::asset('images/print_image.png')}}" class="card-img img-fluid article-image" alt="...">
  	                              </label>
                                  <input id="article-image" class="form-control boat-border-left d-none input-image" type="file" name="image" placeholder="article.png" pattern="/\.(jpe?g|png|gif|bmp)$/i" title="Image must have extension jpg, jpeg, png, gif, bmp" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" value="" required>
                                  <div class="invalid-feedback ms-3">
                                      <strong>
                                        Image must have extension jpg, jpeg, png, gif, bmp
                                      </strong>
                                  </div>
                             </div>

                              <div class="mb-4">
                                  <label for="title" class="col-form-label">Title <i class="fas fa-file-signature"></i></label>
                                  <input id="title" class="form-control rounded-pill" type="text" name="title"
                                         placeholder="title " pattern="^([a-zA-Z0-9\-_,\.:\/\(\)& ]{3,})+$"
                                         title="Title must be in English character only, numbers and characters(- , _ : () / & .) and at least 3 characters "
                                         autocomplete="on" required value="{{old('title')}}">
                                  <div class="invalid-feedback ms-3">
                                      @error('title')
                                        <strong>{{ $message }}</strong>
                                      @else
                                        <strong>Title must be in English character only, numbers and characters(- , _ :
                                            () / & .) and at least 3 characters </strong>
                                      @enderror
                                  </div>
                              </div>

                              <div class="mb-4 ">
                                  <label for="content" class="col-form-label">Content <i class="fas fa-scroll"></i></label>
                                  <textarea id="content" style="width: 100%;"class="nicinstance"  name="content" placeholder="Our article talk about ..." title="Content is required" rows="4" cols="50" autocomplete="on" required ></textarea>
                                  <div class="invalid-feedback ms-3">
                                      @error('content')
                                        <strong>{{ $message }}</strong>
                                      @else
                                        <strong>Content is required </strong>
                                      @enderror

                                  </div>
                              </div>

                              <div class="mb-4">
                                <label for="category" class="col-form-label boat-border-left">
                                    Category <i class="fab fa-buysellads"></i>
                                </label>
                                <select id="category" class="form-select rounded-pill" name="category" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback ms-3">
                                    @error('category')
                                      <strong>{{ $message }}</strong>
                                    @else
                                      <strong>Choose article's category</strong>
                                    @enderror
                                </div>
                            </div>

                              <div class="form-group text-end">
                                  <button class="btn main-btn rounded-pill" type="submit">Add New <i class="fas fa-plus-circle"></i>
                                  </button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!--end modal -->

          <!--table -->
          <div class="mt-5 table-responsive">
              <table class="table table-striped table-hover text-center">
                  <thead class="table-dark">
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Image</th>
                      <th scope="col">Title</th>
                      <th scope="col">Category</th>
                      <th scope="col">Content</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                  </tr>
                  </thead>
                  <tbody id="table-body">
                    @foreach ($articles as $article)
                      <tr>
                          <th scope="row">{{$loop->iteration+(($articles->currentPage()-1)*$articles->perPage())}}</th>
                          <td><img  src="{{URL::asset($article->image)}}" class="card-img img-fluid table-image" alt="..."></td>
                          <td>{{$article->title}}</td>
                          <td>{{$article->category->name}}</td>
                          <td><p class="">{{$article->content}}</p></td>
                          <td>
                            <button class="btn btn-outline-primary rounded-pill" data-bs-toggle="modal"
                              data-bs-target="#edit{{$article->id}}">
                                <i class="far fa-edit" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                  title="Edit"></i>
                            </button>
                          </td>
                          <td>
                            <a href="{{route('delete_article',[$article->id])}}" class="btn btn-outline-danger rounded-pill"
                              data-count="{{$articles->count()}}">
                              <i class="fas fa-trash" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Delete"></i>
                            </a>
                          </td>
                      </tr>

                  @endforeach

                  </tbody>
              </table>
          </div>
          <!-- end table -->

          <div class="col-md-12">
						<div class="d-flex justify-content-center"  >
							{{ $articles->links() }}
						</div>
					</div>


          @foreach ($articles as $article)

              <!-- begin of edit modals -->
              <div class="modal fade" id="edit{{$article->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                   aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title main-color" id="exampleModalLabel">Edit Article</h5>
                              <button type="button" class="btn custom-close" data-bs-dismiss="modal" aria-label="Close">
                                  <i class="fas fa-times-circle"></i>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form class="needs-validation my-5" novalidate id="edit-form{{$article->id}}"
                                action="{{route('update_article',[$article->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 text-start">
        			                          <label class="col-form-label d-block" >Image <i class="far fa-image"  ></i></label>
                                        <label for="article-image$article->id" class="d-block border border-2 " >
                              							<!-- <div class="text-end" >
                              								@if(isset($cart_found->image))
                                                  <a href="{{route('remove_print_img',[$cart_found->id])}}" type="button" class="btn custom-close remove-image" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Image">
                                                    <i class="fas fa-times-circle"></i>
                                                  </a>
                                              @endif
                                            </div> -->
                                            <img  src="{{URL::asset($article->image)}}" class="card-img img-fluid article-image" alt="...">
        	                              </label>
                                        <input id="article-image$article->id" class="form-control boat-border-left d-none input-image" type="file" name="image" placeholder="article.png" pattern="/\.(jpe?g|png|gif|bmp)$/i" title="Image must have extension jpg, jpeg, png, gif, bmp" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" value="{{$article->image}}" >
                                        <div class="invalid-feedback ms-3">
                                            <strong>
                                              Image must have extension jpg, jpeg, png, gif, bmp
                                            </strong>
                                        </div>
                                   </div>

                                    <div class="mb-4">
                                        <label for="title$article->id" class="col-form-label">Title <i class="fas fa-file-signature"></i></label>
                                        <input id="title$article->id" class="form-control rounded-pill" type="text" name="title"
                                               placeholder="title " pattern="^([a-zA-Z0-9\-_,\.:\/\(\)& ]{3,})+$"
                                               title="Title must be in English character only, numbers and characters(- , _ : () / & .) and at least 3 characters "
                                               autocomplete="on" required value="{{$article->title}}">
                                        <div class="invalid-feedback ms-3">
                                            @error('title')
                                              <strong>{{ $message }}</strong>
                                            @else
                                              <strong>Title must be in English character only, numbers and characters(- , _ :
                                                  () / & .) and at least 3 characters </strong>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 ">
                                        <label for="content$article->id" class="col-form-label">Content <i class="fas fa-scroll"></i></label>
                                        <textarea id="content$article->id" style="width: 100%;"class="nicinstance"  name="content" placeholder="Our article talk about ..." title="Content is required" rows="4" cols="50" autocomplete="on" required >{{$article->content}}</textarea>
                                        <div class="invalid-feedback ms-3">
                                            @error('content')
                                              <strong>{{ $message }}</strong>
                                            @else
                                              <strong>Content is required </strong>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="mb-4">
                                      <label for="category$article->id" class="col-form-label boat-border-left">
                                          Category <i class="fab fa-buysellads"></i>
                                      </label>
                                      <select id="category$article->id" class="form-select rounded-pill" name="category" required>
                                          <option value="">Select Category</option>
                                          @foreach($categories as $category)
                                              <option value="{{$category->id}}" @if($article->category_id == $category->id) selected @endif>{{$category->name}}</option>
                                          @endforeach
                                      </select>
                                      <div class="invalid-feedback ms-3">
                                          @error('category')
                                            <strong>{{ $message }}</strong>
                                          @else
                                            <strong>Choose article's category</strong>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="form-group text-end">
                                      <button class="btn main-btn rounded-pill" type="submit">Update <i class="fas fa-sync-alt"></i>
                                      </button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- end of edit modals -->


          @endforeach
      </div>
    </div>

@endsection


@section('js')
    <script src="{{ asset('js/validation.js')}}"></script>
    <script src="{{ asset('js/admin.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endsection
