<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/blog.css')}}">

</head>
<body >


    @include('navbar')
    @yield('content')
    {{-- image --}}
    <div class="body">
        <div >
            <img class="image" src="{{Url('images/Rectangle 45.png')}}" alt="">
        </div>
        {{-- writing --}}
        <div class="writing">
    
            <article class="first ">
                <h1 class="h1">{{$blog["title"]}}</h1>
                <p class="p">Technology and mental well-being might seem like profoundly antagonistic terms. However, there are excellent digital tools to help you reach mindfulness and to practice meditation. You can even use smartphone apps, virtual reality solutions and digital devices as a form of relieving stressing and achieving digital detox – as, after a while, you will be able to practice all types of anti-anxiety skills on your own. So, let The Medical Futurist show you how you can enhance your mental and emotional health with the help of technology.</p>
            </article>
            <article class="second">
                <h3 class="h3">The need for taking care of our emotional health</h3>
                <p class="p">“Just as we observe physical hygiene to stay well, we need to cultivate a kind of emotional hygiene too,” wrote the Dalai Lama on his Twitter-feed. There are three crucial points around His Holiness’ statement. First and foremost, the popularity of health-enhancing, physically active lifestyle is soaring worldwide. Nevertheless, there’s always room for improvement: the WHO says that globally, 23 percent of adults and 81 percent of school-going adolescents are not active enough. According to the organization, adults aged 18-64 should do at least 150 minutes of moderately intense physical activity each week, which is not unaccomplishable. Moreover, the numerically and statistically driven 21st-century mind could take a great inspiration and power from the various fitness trackers and wearables.
    
                    Secondly, emotional hygiene seems to be thrown into the shade nowadays. Somehow, the culture of busyness prevents us from squeezing some time for mental health into our packed schedules. Information is pouring on us from millions of communication channels; we are connecting with hundreds of ‘friends’ on social media, we are obsessed with data due to the fear of missing out and time management slices up our days into meetings and to-do-lists.
                    
                    The pressure to perform and the stress to achieve is the air every busy-bee is breathing. However, turbulent lifestyle comes with a price. No wonder so many people have mental health issues. In the US, that means one in five adults – more than 40 million Americans! On the old continent, 27 percent of the population has to cope with mental disorders, which means 83 million struggling Europeans. In Asia, the prevalence of depression is 20 percent in Thailand, 19.9 percent in Taiwan, 19.4 percent in Korea, 17.5 in Malaysia and 16.5 percent in China.</p>
            </article>
    
        </div>
    {{-- signup for blog --}}
    <div class="signup">
    <h2 class="h2">Sign up for The Healing blog</h2>
    <p class="p">A weekly, ad-free Blog that helps you stay in the know.</p>
    
    <div class="inpImg">
    
        <input class="inp" type="text" name="" id="" placeholder="Enter your e-mail">
    
        <img class="send" src="{{Url('images/Send.png')}}" alt="">
    
    </div>
    
    </div>
    {{-- Recommend section --}}
    <div >
        <h4 class="h4">Recommended for you</h4>
        <div class="imgs">
            <img class="" src="{{Url('images/Group 126.png')}}" alt="">
            <img class="" src="{{Url('images/Group 128.png')}}" alt="">
    
        </div>
    </div>
    </div>
   


</body>
</html>