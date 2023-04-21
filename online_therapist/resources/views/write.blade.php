@extends('layout')

@section('content')
    
<section class="post-con">
    <link rel="stylesheet" href="{{asset('style/write.css')}}">
    <h1 class="post-t">Write a blog that heal others</h1>
    <form method="post" class="post-form" action="/blogs">
        @csrf
        <label class="post-label" for="">
            <span class="post-span" >Blog title</span>
            <input class="post-title" placeholder="Title" type="text" name="title">
            @error('title')
                <span class="error">{{$message}}</span>
            @enderror
        </label>
       
        <label class="post-label" for="">
            <span class="post-span">Write your blog</span>
 
            <textarea class="post-blog" placeholder="Blog" name="desc" id="" cols="30" rows="10"></textarea>
@error('desc')
    <span class="error">{{$message}}</span>
@enderror
        </label>

     {{-- <label class="post-label" for="">
            <span class="post-span">Choose Image</span>
            <input class="post-img" type="file">
        </label>--}}   
     <button class="post-btn" type="submit">Post</button>

    </form>
    
</section>
@endsection