@include('includes.front_header')

<!-- Navigation -->
@include('includes.front_nav')

<!-- Page Content -->
<div class="container">

    <div class="row">
        <!-- Blog Post Content Column -->
        <div class="col-lg-8">
            @yield('content')
        </div>

        <!-- Blog Sidebar Widgets Column -->
        @include('includes.front_sidebar')

    </div>
    <!-- /.row -->

   @include('includes.front_footer')
