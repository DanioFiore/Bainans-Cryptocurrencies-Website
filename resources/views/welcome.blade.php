<x-layout>
    
    <x-slot name="title">Bainans - Home</x-slot>

    @if (session('flash'))
        <div id="flashDivShow" class="alert alert-success d-flex justify-content-between" style="margin-top: 50px">
            {{session('flash')}}
            <button id="closeFlashButton" type="button" class="btn btn-outline-danger">x</button>
        </div>
    @endif

    @if(session()->has('access.denied'))
        <div class="flex flex-row justify-center my-2 alert alert-danger">
            {{session('access.denied')}}
        </div>
    @endif

    @if(session()->has('message'))
        <div class="flex flex-row justify-center my-2 alert">
            {{session('message')}}
        </div>
    @endif

    {{-- title start --}}
    <div id="title">
        <h1 class="text-center" id="homePageH1">
            B A I N A N S
        </h1>
        <h2 class="text-center" id="homePageH2Title">
            We believe in Cryptocurrencies.
        </h2>
        <h6 class="text-center" id="homePageH6Title">
            (Even in the Bear Market)
        </h6>
    </div>
    {{-- title end --}}
    

    {{-- article start --}}
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$article->title}}
                            </h5>
                            <a href="{{route('categoryShow', ['category'=>$article->category])}}">
                                Category: {{$article->category->name}}
                            </a>
                            <p class="text-black">
                                Date: {{$article->created_at->format('d/m/Y')}}
                            </p>
                            <a href="{{route('articles.show', compact('article'))}}" class="btn btn-primary">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>  
            @endforeach
        </div>
    </div>
    {{-- article end --}}

    {{-- counters start --}}
    <div id="counterId" class="mt-5 opacity-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <h4 class="counterH4first opacity-0">
                    </h4>
                    <p>
                        24h trading volume on Bainans exchange
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <h4 class="counterH4second opacity-0">
                    </h4>
                    <p>
                        Cryptocurrencies listed
                    </p>
                </div>
                <div class="col-12 col-md-4">
                    <h4 class="counterH4third opacity-0">
                    </h4>
                    <p>
                        Registered users
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- counters end --}}

    {{-- table crypto start --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="cryptoHomeTable" class="table opacity-0">
                    <thead>
                        <tr>
                            <th class="text-warning" scope="col">Name</th>
                            <th class="text-warning" scope="col">Price</th>
                            <th class="text-warning" scope="col">Vwap24h</th>
                            <th class="text-warning" scope="col">Rank</th>
                            <th class="text-warning" scope="col">Symbol</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cryptos as $crypto)
                            <tr>
                                <td class="text-white">
                                    {{ $crypto->name }};
                                </td>
                                <td class="text-white">
                                    {{ number_format($crypto->priceUsd, 2)}}
                                </td>
                                <td class="text-white">
                                    {{ number_format($crypto->vwap24Hr, 2) }}
                                </td>
                                <td class="text-white">
                                    {{ $crypto->rank }}
                                </td>
                                <td class="text-white">
                                    {{ $crypto->symbol }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- table crypto end --}}

    {{-- start now link start --}}
    @guest
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <h3>Join US to read our latest news about the cryptocurrency world</h3>
                <h6>Or you'll be a dogecoiner..</h6>
                <a class="btn btn-outline-warning mt-2" href="{{route('register')}}">Start now.</a>
            </div>
        </div>
    </div>
    @endguest
    {{-- start now link end --}}

    {{-- our team start --}}
    <div id="teamCardAnimation" class="opacity-0">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h3>Our Team</h3>
                    <img src="/img/Senza.jpeg" alt="member team picture" style="height: 464px; width: 346px;">
                    <h4 class="mt-3">Danio Fiore</h4>
                    <p>Jr. Full-Stack Developer</p>
                    <p>"Searching for my first web developer job experience"</p>
                </div>
            </div>
        </div>
    </div>
    
    <div id="teamSkills" class="container opacity-0">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center">
                <h5>Programming Language</h5>
                <div class="d-flex mt-2">
                    <ul class="text-white">
                        <h6>Front-End:</h6>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Javascript</li>
                        <li>Vue.js - In progress</li>
                        <li>React.js - In progress</li>
                        <li>Node.js</li>
                        <li>Bootstrap</li>
                    </ul>
                    <ul class="text-white">
                        <h6>Back-End:</h6>
                        <li>PHP</li>
                        <li>Laravel</li>
                        <li>MySQL | SQL</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- our team end --}}
    
    {{-- help start --}}
    <div class="container mt-5">
        <div class="row div col-12">
            <h3>
                Need help?
            </h3>
        </div>
    </div>

    <div class="container mt-3 bg-secondary border border-warning border-2 p-3">
        <div class="row align-items-center">
            {{-- first col --}}
            <div class="col-4 d-flex align-items-center justify-content-between">
                <div class="me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                </div>
                <div>
                    <h5>
                        Clients Assistant 24/7
                    </h5>
                    <p>
                        For all our clients, we grants a support everyday, everytime.
                    </p>
                    <a href="{{route('contactUs')}}">Contact us</a>
                </div>
            </div>

            {{-- second col --}}
            <div class="col-4 d-flex align-items-center justify-content-between">
                <div class="me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-question-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
                      </svg>
                </div>
                <div>
                    <h5>
                        FAQ
                    </h5>
                    <p>
                        Read the answer for our frequent asked question.
                    </p>
                    <a href="{{route('faq')}}">Read now</a>
                </div>
            </div>

            {{-- third col --}}
            <div class="col-4 d-flex align-items-center justify-content-between">
                <div class="me-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                        <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                        </svg>
                </div>
                <div>
                    <h5>
                        Blog
                    </h5>
                    <p>
                        Discover our latest news about the Crypto World
                    </p>
                    <a href="{{route('articles.index')}}">Yea, discover.</a>
                </div>
            </div>
        </div>
    </div>
    {{-- help end --}}
</x-layout>