@if (session()->has("message"))
    <div  x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show" class="flash">
        <h4 class="flash-message">
            {{session('message')}}
        </h4>
    </div>
@endif