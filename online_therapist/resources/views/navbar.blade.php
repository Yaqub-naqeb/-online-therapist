{{-- for disctop --}}
    <nav class="nav">
        <link rel="stylesheet" href="{{asset('style/navbar.css')}}">
        <h1 class="nav-title">Healing</h1>
        @auth
        <h4 class="welcome">Welcome {{auth()->user()->name}}</h4>
        @endauth
        
      <div class="ul open">


        <ul >
            <li><a href="/">Home</a></li>


            <li><a href="/blogs">Blogs</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contactUs">Contact Us</a></li>
            
            @auth
            <li><a href="/write">write</a></li>
            <li><a href="/appointment">Appointment</a></li>
            
            <li><a href="/profile">Profile</a></li>
            <form method="POST" action="/logout">
                @csrf
            <button type="submit" class="logout-btn">Logout</button>
            </form>
           

@else
    
<li><a href="/signup">Signup</a></li>


            @endauth
          

         
        </ul>

      </div>

        <div class="burger-menu">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <script>
            document.querySelector(".burger-menu").addEventListener("click", function() {
              this.classList.toggle("open");
              document.querySelector(".ul").classList.toggle("open")
            });
         
          </script>


    </nav>


