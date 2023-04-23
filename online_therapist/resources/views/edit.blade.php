@extends('layout')

@section('content')
    
<section class="post-con">
    <link rel="stylesheet" href="{{asset('style/write.css')}}">
    <h1 class="post-t">Write a blog that heal others</h1>
    <form method="post" class="post-form" action="/blogs/{{$blog->id}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label class="post-label" for="">
            <span class="post-span" >Blog title</span>
            <input  class="post-title"  type="text" name="title" value="{{$blog["title"]}}">
            @error('title')
                <span class="error">{{$message}}</span>
            @enderror
        </label>
       
        <label class="post-label" for="">
            <span class="post-span">Update your blog</span>
 
            <textarea  class="post-blog" name="desc" id="" cols="30" rows="10" >{{$blog["desc"]}}</textarea>
@error('desc')
    <span class="error">{{$message}}</span>
@enderror
        </label>

      <label class="post-label" for="">
            <span class="post-span">Update Image</span>
            <input name="image" class="post-img" type="file">
            <img class="img-update" src="{{$blog["image"]? asset('storage/' . $blog["image"]) : asset('images/Blogimg.png')}}" alt="" srcset="">
      </label>  
     <button class="post-btn" type="submit">Update</button>

    </form>
    
</section>
@endsection