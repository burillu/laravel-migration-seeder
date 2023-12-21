@php

    //dd($menu);
@endphp


<header class="bg-white container">

    <div id="main-menu ">

        <nav class="navbar-nav navbar-light">

            <ul class="list-unstyled d-flex align-content-center gap-2 text-uppercase">
                <li class="nav-item">
                    <div id="logo" class="text-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png"
                            alt="logo-laravel">
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">

                    <a class="nav-link {{ Route::currentRouteName() == 'trains' ? 'active' : '' }}"
                        href="{{ route('trains') }}">
                        Today-Trains
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'books' ? 'active' : '' }}"
                        href="{{ route('books') }}">
                        Books
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}"
                        href="{{ route('about') }}">
                        Chi siamo
                    </a>
                </li> --}}
            </ul>
        </nav>
    </div>
</header>
