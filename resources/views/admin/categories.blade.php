@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
@endsection

@section('admin_content')
    <h1 class="text-uppercase custom-text-main">Categories</h1>
    <!-- Button trigger modal -->
    <button class="btn main-btn rounded-pill mt-3" data-bs-toggle="modal" data-bs-target="#addNew">
        Add New Category <i class="fas fa-plus"></i>
    </button>

    <div id="data-section">
      <div id="data-container">

          <!-- Modal -->
          <div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title main-color" id="exampleModalLabel">Add New Category</h5>
                          <button type="button" class="btn custom-close" data-bs-dismiss="modal" aria-label="Close">
                              <i class="fas fa-times-circle"></i>
                          </button>
                      </div>
                      <div class="modal-body">
                          <form class="needs-validation my-5" novalidate id="add-form" action="{{route('add_category')}}"
                                method="post">
                              @csrf

                              <div class="mb-4">
                                  <label for="category-name" class="col-form-label">Name <i class="fas fa-file-signature"></i></label>
                                  <input id="category-name" class="form-control rounded-pill" type="text" name="name"
                                         placeholder="category " pattern="^([a-zA-Z0-9\-_,\.:\/\(\)& ]{3,})+$"
                                         title="Category must be in English character only, numbers and characters(- , _ : () / & .) and at least 3 characters "
                                         autocomplete="on" required value="{{old('name')}}">
                                  <div class="invalid-feedback ms-3">
                                      @error('name')
                                        <strong>{{ $message }}</strong>
                                      @else
                                        <strong>Category must be in English character only, numbers and characters(- , _ :
                                            () / & .) and at least 3 characters </strong>
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
                      <th scope="col">Name</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                  </tr>
                  </thead>
                  <tbody id="table-body">
                    @foreach ($categories as $category)
                      <tr>
                          <th scope="row">{{$loop->iteration+(($categories->currentPage()-1)*$categories->perPage())}}</th>
                          <td><a>{{$category->name}}</a></td>
                          <td>
                            <button class="btn btn-outline-primary rounded-pill" data-bs-toggle="modal"
                              data-bs-target="#edit{{$category->id}}">
                                <i class="far fa-edit" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                  title="Edit"></i>
                            </button>
                          </td>
                          <td>
                            <a href="{{route('delete_category',[$category->id])}}" class="btn btn-outline-danger rounded-pill"
                              data-count="{{$categories->count()}}">
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
							{{ $categories->links() }}
						</div>
					</div>


          @foreach ($categories as $category)

              <!-- begin of edit modals -->
              <div class="modal fade" id="edit{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                   aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title main-color" id="exampleModalLabel">Edit Category</h5>
                              <button type="button" class="btn custom-close" data-bs-dismiss="modal" aria-label="Close">
                                  <i class="fas fa-times-circle"></i>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form class="needs-validation my-5" novalidate id="edit-form{{$category->id}}"
                                    action="{{route('update_category',[$category->id])}}" method="post">
                                  @csrf
                                  <div class="mb-4">
                                      <label for="category-name" class="col-form-label">Name <i
                                              class="fas fa-file-signature"></i></label>
                                      <input id="category-name{{$category->id}}" class="form-control boat-border-left"
                                             type="text" name="name" placeholder="category 1"
                                             pattern="^([a-zA-Z0-9\-_,\.:\/\(\)& ]{3,})+$"
                                             title="Category must be in English character only, numbers and characters(- , _ : () / & .) and at least 3 characters "
                                             autocomplete="on" required
                                             value="{{$category->name}}">
                                      <div class="invalid-feedback ms-3">
                                          @error('name')
                                          <strong>{{ $message }}</strong>
                                          @else
                                              <strong>Category must be in English character only, numbers and characters(- , _
                                                  : () / & .) and at least 3 characters </strong>
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
