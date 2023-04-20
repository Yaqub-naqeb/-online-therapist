
    @extends('layout')

    @section('content')
    <section class="blogs">
        <link rel="stylesheet" href="{{asset('style/blogs.css')}}">
        <h1 class="blogs-title">Blogs</h1>
        <x-search></x-search>
       

        <div class="card-con">
          @foreach ($Blogs as $blog)
         
              <x-blog-card :blog='$blog'></x-blog-card>
          @endforeach
           
        </div>
    </section>
    @endsection
    