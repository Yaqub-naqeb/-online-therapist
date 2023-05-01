

<div class="">
    <link rel="stylesheet" href="{{asset('style/subscribe.css')}}">
    
    <form  class="form-sub" action="/" method="post">
        @csrf
        <input class="inp" type="text" name="email" id="" placeholder="Enter your e-mail">
        <button class="btn-img" type="submit">
            <img class="send"  src="{{Url('images/Send.png')}}" alt="">
        </button>
    </form>
    

   

</div>