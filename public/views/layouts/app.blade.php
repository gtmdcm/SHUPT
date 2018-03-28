<!-- 存放在 resources/views/layouts/app.blade.php -->

<html lang="{{ app()->getLocale() }}">
<head>
    <title>SHUPT - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div>
        @section('logo')
            <a href="/">logos</a>
        @show
        @guest
            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @else
            <li>
                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div aria-labelledby="navbarDropdown">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </div>
    <div>
        @guest
        @else
            <p-nav></p-nav>
        @endguest
    </div>
    <div>
        @yield('content')
        @section('iflogin')
            @guest
                请先
                <a href="{{ route('login') }}">登录</a>
                或
                <a href="{{ route('register') }}">注册</a>
            @else

            @endguest
        @show
    </div>
    <div>
        ©2018 SHUPT.net
    </div>
</div>
</body>
</html>