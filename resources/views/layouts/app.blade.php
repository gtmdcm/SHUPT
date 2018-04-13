<!-- 存放在 resources/views/layouts/app.blade.php -->

<html lang="{{ app()->getLocale() }}">
<head>
    <title>SHUPT - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}">

</head>
<body>
<div id="app">
    {{--走马灯--}}
    {{--logo栏--}}
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
    {{--nav--}}
    <div>
        @guest
        @else
            <s-nav></s-nav>
        @endguest
    </div>
    {{--内容--}}
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
    <z-main></z-main>
    {{--脚注--}}
    <div>
        ©2018 SHUPT
    </div>
</div>
</body>
</html>