<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font H --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    {{-- font other --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

    {{-- bootstrap icons cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>{{isset($title) ? $title : 'Bainans'}}</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- navbar start --}}
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">

            {{-- logo bitcoin start --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-currency-bitcoin text-warning" viewBox="0 0 16 16">
                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
            </svg>
            {{-- logo bitcoin end --}}

            {{-- toggler button when collapse start --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span id="togglerButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-double-down text-warning" viewBox="0 0 16 16" id="arrowTogglerButton">
                        <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </span>
            </button>
            {{-- toggler button when collapse end --}}

            {{-- links navbar start --}}
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('homepage')}}">{{__('ui.home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cryptocurrencies')}}">{{__('ui.cryptocurrencies')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="categoriesDropwodn" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                        {{__('ui.article')}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        <li>
                            <a href="{{route('articles.index')}}" class="dropdown-item">
                                {{__('ui.allArticleDropdown')}}
                            </a>
                        </li>
                        @foreach($categories as $category)
                            <li>
                                <a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item">
                                    {{$category->name}}
                                </a>
                            </li>
                            
                        @endforeach
                    </ul>
                </li>
                </ul>
                {{-- searchbar start --}}
                <form action="{{route('articles.search')}}" method="GET" class="d-flex">
                    <input type="search" name="searched" class="form-control me-2" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">{{__('ui.searchButton')}}</button>
                </form>
                {{-- searchbar end --}}
                <ul class="navbar-nav mb-2 mb-md-0 d-flex align-items-center">
                    {{-- guest --}}
                    @guest
                    <li class="nav-item">
                        <a href="{{route('register')}}" class="nav-link">
                            {{__('ui.registerButton')}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link">
                            {{__('ui.loginButton')}}
                        </a>
                    </li>
                    @endguest

                    {{-- user --}}
                    @auth
                    <li class="nav-item me-4">
                        <span class="text-white">{{__('ui.sayHello')}} </span>
                        <a href="{{route('profile')}}" id="userProfileName" class="text-white"> {{Auth::user()->name}} <img src="{{Auth::user()->profile->picture==Storage::url('public/defaultUserPicture.webp') ? Auth::user()->profile->picture : Storage::url(Auth::user()->profile->picture)}}" alt="" style="height: 40px; width: 40px; border-radius: 20px"></a>
                    </li>

                    {{-- writer --}}
                    @if (Auth::user()->is_writer)
                        <li class="nav-item me-4">
                            <a href="{{route('writer.writePage')}}" class="btn btn-outline-success">{{__('ui.writeArticleButton')}}</a>
                        </li>
                    @endif

                    <li class="nav-item me-4">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="btn btn-outline-warning">{{__('ui.logoutButton')}}</button>
                        </form>
                    </li>
                    @endauth
                </ul>
            </div>
            {{-- links navbar end --}}
        </div>
    </nav>
    {{-- navbar end --}}

    <div class="everything min-vh-100">
        {{$slot}}
    </div>

    {{-- footer start --}}
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-5 border-top mx-5">
        <p class="col-md-4 mb-0 text-muted">{{__('ui.copyright')}}</p>
    
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-currency-bitcoin text-warning" viewBox="0 0 16 16">
            <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
        </svg>
        
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link px-2 text-muted">{{__('ui.home')}}</a></li>
          <li class="nav-item"><a href="{{route('faq')}}" class="nav-link px-2 text-muted">{{__('ui.faqs')}}</a></li>
          <li class="nav-item"><a href="{{route('workWithUs')}}" class="nav-link px-2 text-muted">{{__('ui.joinTeamFooter')}}</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">{{__('ui.about')}}</a></li>
        </ul>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__('ui.langDropdown')}}
            </button>
            <ul class="dropdown-menu">
              <li><x-_en lang="en" /></li>
              <li><x-_ita lang="it" /></li>
            </ul>
        </div>
        
      </footer>
    {{-- footer end --}}
    
    @livewireScripts
</body>
</html>