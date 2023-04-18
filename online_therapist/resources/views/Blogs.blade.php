
    @extends('layout')

    @section('content')
    <section>
        <h1>Blogs</h1>

        <div>
          @foreach ($Blogs as $blog)
          <h1>{{$blog["title"]}}</h1>
          <p>{{$blog["tags"]}}</p>
              <a href="/blog/{{$blog["id"]}}">see more</a>
          @endforeach
           
        </div>
    </section>
    @endsection
    