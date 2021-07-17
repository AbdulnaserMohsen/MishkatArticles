@extends('layouts.all')


	@section('content')

    <!-- admin dashboard -->
    <section>
      <div id="wrapper" >
		  <!-- Sidebar -->
	      <div id="sidebar-wrapper">
	         <ul class="sidebar-nav nav-pills nav-fill" id="menu">
	           <li class="" >
	               <a href="#"  id="menu-toggle-2" ><span class="fa-stack fa-lg text-start"><i class="fa fa-bars  fa-stack-1x "></i></span>hide</a>
	            </li>

	            <li @if(url()->current() == route('dashboard')) class="active" @endif>
	               <a href="{{route('dashboard')}}"><span class="fa-stack fa-lg text-start"><i class="fas fa-tachometer-alt fa-stack-1x "></i></span> Dashboard</a>
	            </li>

      				<li @if(url()->current() == route('categories')) class="active" @endif>
      					<a href="{{route('categories')}}"> <span class="fa-stack fa-lg text-start"><i class="fas fa-layer-group fa-stack-1x "></i></span>Categories</a>
      				</li>

      				<li @if(url()->current() == route('articles')) class="active" @endif>
      					<a href="{{route('articles')}}"> <span class="fa-stack fa-lg text-start"><i class="far fa-clipboard fa-stack-1x "></i></span>Articles</a>
      				</li>

	         </ul>
	      </div>
	      <!-- /#sidebar-wrapper -->

		  <!-- Page Content -->
	      <div id="page-content-wrapper">
	         <div class="container-fluid">

	            @yield('admin_content')

	         </div>
	      </div>
	      <!-- /#page-content-wrapper -->
	   </div>
	   <!-- /#wrapper -->
    </section>
    <!-- end admin dashboard -->

	@endsection
