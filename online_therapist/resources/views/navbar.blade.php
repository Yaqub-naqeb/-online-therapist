
    <nav class="nav">
        <link rel="stylesheet" href="{{asset('style/navbar.css')}}">
        <h1 class="nav-title">Healing</h1>
        @auth
        <h4 class="welcome">Welcome {{auth()->user()->name}}</h4>
        @endauth
        
        <ul>
            <li><a href="/">Home</a></li>


            <li><a href="/blogs">Blogs</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contactUs">Contact Us</a></li>
            
            @auth
            <li><a href="/write">write</a></li>
            
            <li><a href="/manage">Manage blogs</a></li>
            <li><a href="/profile">Profile</a></li>
            <form method="POST" action="/logout">
                @csrf
            <button type="submit" class="logout-btn">Logout</button>
            </form>
           

@else
    
<li><a href="/signup">Signup</a></li>


            @endauth
          

         
        </ul>
    </nav>
<