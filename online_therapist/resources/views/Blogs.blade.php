<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('navbar')
    @yield('content')
    <h1>Blogs</h1>

    <div>
      @foreach ($Blogs as $blog)
      <h1>{{$blog["title"]}}</h1>
      <p>{{$blog["tags"]}}</p>
          <a href="/blog/{{$blog["id"]}}">see more</a>
      @endforeach
       
    </div>
    
</body>
</html>