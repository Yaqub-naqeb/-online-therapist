<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style/layout.css')}}">
    <script src="//unpkg.com/alpinejs" defer></script>

    
    <title>Document</title>
  
  
</head>
<body>
    @include('navbar')

    @yield('content')
<x-flash></x-flash>
    <x-footer></x-footer>
</body>
</html>