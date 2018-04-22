<!-- 存放在 resources/views/layouts/app.blade.php -->

<html lang="{{ app()->getLocale() }}">
<head>
    <title>SHUPT - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        html {
            height: 100%;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
        }

        body {
            margin: 0;
            height: 100%;
            background: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            /*font-weight: 100;*/
        }

        .shader {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            text-shadow: 0 0 black;
        }

        canvas {
            display: block;
            width: 100%;
            height: 100%;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            color: black;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="shader">
    <canvas id="canvas"></canvas>
</div>
<div id="app">
    {{--走马灯--}}
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
    {{--logo栏--}}
    @guest
        <div style="height: 20%;"></div>
        @yield('content')
        @show
    @else
        <header>
            <s-nav></s-nav>
        </header>
        <content>
            <div style="height: 10%;">
            </div>
            <Row type="flex" justify="center">
                @yield('vues')
                @show
            </Row>
        </content>
        <footer>
            <s-status></s-status>
        </footer>
    @endguest
    {{--<div>--}}
    {{--@section('logo')--}}
    {{--<a href="/torrent">logos</a>--}}
    {{--@show--}}
    {{--@guest--}}
    {{--<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
    {{--<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
    {{--@else--}}
    {{--<li>--}}
    {{--<a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"--}}
    {{--aria-expanded="false" v-pre>--}}
    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
    {{--</a>--}}

    {{--<div aria-labelledby="navbarDropdown">--}}
    {{--<a href="{{ route('logout') }}"--}}
    {{--onclick="event.preventDefault();--}}
    {{--document.getElementById('logout-form').submit();">--}}
    {{--{{ __('Logout') }}--}}
    {{--</a>--}}

    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{--@csrf--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--@endguest--}}
    {{--</div>--}}
    {{--nav--}}

    {{--内容--}}
    {{--脚注--}}

    <div class="shupt-logo">
        ©2018 SHUPT
    </div>
</div>
</body>
</html>
<script>
    class Circle {
        constructor(x, y) {
            this.x = x;
            this.y = y;
            this.r = Math.random() * 10;
            this._mx = Math.random();
            this._my = Math.random();
        }

        drawCircle(ctx) {
            ctx.beginPath();
            //arc() 方法使用一个中心点和半径，为一个画布的当前子路径添加一条弧。
            ctx.arc(this.x, this.y, this.r, 0, 360)
            ctx.closePath();
            ctx.fillStyle = 'rgba(173, 216, 230, 0.3)';
            ctx.fill();
        }

        drawLine(ctx, _circle) {
            let dx = this.x - _circle.x;
            let dy = this.y - _circle.y;
            let d = Math.sqrt(dx * dx + dy * dy)
            if (d < 150) {
                ctx.beginPath();
                ctx.moveTo(this.x, this.y); //起始点
                ctx.lineTo(_circle.x, _circle.y); //终点
                ctx.closePath();
                //ctx.strokeStyle = 'rgba(204, 204, 204, 0.3)';
                ctx.strokeStyle = 'rgba(172, 216, 230, 0.3)';
                ctx.stroke();
            }
        }

        move(w, h) {
            this._mx = (this.x < w && this.x > 0) ? this._mx : (-this._mx);
            this._my = (this.y < h && this.y > 0) ? this._my : (-this._my);
            this.x += this._mx / 2;
            this.y += this._my / 2;
        }
    }

    class currentCirle extends Circle {
        constructor(x, y) {
            super(x, y)
        }

        drawCircle(ctx) {
            ctx.beginPath();
            //注释内容为鼠标焦点的地方圆圈半径变化
            //this.r = (this.r < 14 && this.r > 1) ? this.r + (Math.random() * 2 - 1) : 2;
            this.r = 8;
            //ctx.arc(this.x, this.y, this.r, 0, 360);
            ctx.closePath();
            ctx.fill();

        }
    }

    //更新页面用requestAnimationFrame替代setTimeout
    window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;

    let canvas = document.getElementById('canvas');
    let ctx = canvas.getContext('2d');
    var w = canvas.width = canvas.offsetWidth;
    var h = canvas.height = canvas.offsetHeight;
    var circles = [];
    var current_circle = new currentCirle(0, 0)

    let draw = function (animition) {
        ctx.clearRect(0, 0, w, h);
        for (let i = 0; i < circles.length; i++) {
            circles[i].move(w, h);
            circles[i].drawCircle(ctx);
            for (j = i + 1; j < circles.length; j++) {
                circles[i].drawLine(ctx, circles[j])
            }
        }
        // if (current_circle.x) {
        //     current_circle.drawCircle(ctx);
        //     for (var k = 1; k < circles.length; k++) {
        //         current_circle.drawLine(ctx, circles[k])
        //     }
        // }
        if (animition)
            requestAnimationFrame(draw);
    }

    let init = function (num) {
        for (var i = 0; i < num; i++) {
            circles.push(new Circle(Math.random() * w, Math.random() * h));
        }
        draw(true);
    }

    window.addEventListener('load', init(40));

    window.onmousemove = function (e) {
        e = e || window.event;
        current_circle.x = e.clientX;
        current_circle.y = e.clientY;
    }

    window.onmouseout = function () {
        current_circle.x = null;
        current_circle.y = null;
    }
    window.onresize = function () {
        w = canvas.width = canvas.offsetWidth;
        h = canvas.height = canvas.offsetHeight;
        draw(false);
    }
</script>