<header class="p-3 bg-dark text-white">
    <div class="container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{ route('home', app()->getLocale()) }}" class="text-warning text-decoration-none fw-bold me-5 fs-3">PROFI</a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                <li><a href="{{ route('contact-data', app()->getLocale()) }}" class="nav-link px-2 text-white {{ request()->is('*/contact/data') ? 'active' : ''}}">{{ __('main.header.messages') }}</a></li>
                <li><a href="{{ route('about', app()->getLocale()) }}" class="nav-link px-2 text-white  {{ request()->is('*/about') ? 'active' : ''}}">{{ __('main.header.about_us') }}</a></li>
                <li><a href="{{ route('contact', app()->getLocale())}}" class="nav-link px-2 text-white {{ request()->is('*/contact') ? 'active' : ''}}">{{ __('main.header.contact') }}</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="{{ __('main.search') }}" aria-label="Search">
            </form>

            <div class="text-end d-flex">
                @guest
                        <a href="{{ route('login', app()->getLocale()) }}" class="btn btn-outline-light me-2">{{ __('main.header.login') }}</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register', app()->getLocale()) }}" class="btn btn-warning">{{ __('main.header.register') }}</a>
                    @endif
                @else
                    <div class="dropdown">
                        <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout', app()->getLocale()) }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                @lang('main.header.logout')
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white"
                           href="#"
                           id="navbarDarkDropdownMenuLink"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                           {{ app()->getLocale() == 'en'?'Eng':'Հայ' }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li>
                                {{--
                                    https://stackoverflow.com/questions/30046691/laravel-how-to-get-current-route-name-v5-v7
                                    Route::currentRouteName()
                                    request()->route()->getName()
                                --}}
                                <a class="dropdown-item" href="{{ route(request()->route()->getName(), app()->getLocale() == 'en'?'hy':'en' ) }}">
                                    {{ app()->getLocale() == 'en'?'Հայ':'Eng' }}
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>

        </div>
    </div>
</header>
