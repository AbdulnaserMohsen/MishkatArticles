@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
@endsection

@section('admin_content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

      <div class="col">
            <div class="counter ">
                <div class="counter-icon">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="counter-content">
                    <a href="{{route('categories')}}" class="h3 stretched-link">Categories</a>
                    <span class="counter-value">{{$categories_counter ?? 0 }}</span>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="counter ">
                <div class="counter-icon">
                    <i class="far fa-clipboard"></i>
                </div>
                <div class="counter-content">
                    <a href="{{route('articles')}}" class="h3 stretched-link">Articles</a>
                    <span class="counter-value">{{$articles_counter ?? 0 }}</span>
                </div>
            </div>
        </div>



    </div>
@endsection


@section('js')
    <script src="{{ asset('js/admin.js')}}"></script>
@endsection
