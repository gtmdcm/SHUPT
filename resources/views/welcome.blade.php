<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SHUPT - @yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
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
            font-weight: 100;
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
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
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
<div class="flex-center position-ref full-height" id="app">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/mainpage') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
    <div class="content">
        <div class="title m-b-md">
            SHUPT
        </div>
        <div class="links">
            <a href="">PT介绍</a>
            <a href="">加入我们</a>
        </div>
        @section('content')
            <nav></nav>
        @endsection
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
            ctx.fillStyle = 'rgba(204, 204, 204, 0.3)';
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
                ctx.strokeStyle = 'rgba(204, 204, 204, 0.3)';
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
            ctx.arc(this.x, this.y, this.r, 0, 360);
            ctx.closePath();
            ctx.fill();

        }
    }

    //更新页面用requestAnimationFrame替代setTimeout
    window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;

    let canvas = document.getElementById('canvas');
    let ctx = canvas.getContext('2d');
    let w = canvas.width = canvas.offsetWidth;
    let h = canvas.height = canvas.offsetHeight;
    let circles = [];
    let current_circle = new currentCirle(0, 0)

    let draw = function () {
        ctx.clearRect(0, 0, w, h);
        for (let i = 0; i < circles.length; i++) {
            circles[i].move(w, h);
            circles[i].drawCircle(ctx);
            for (j = i + 1; j < circles.length; j++) {
                circles[i].drawLine(ctx, circles[j])
            }
        }
        if (current_circle.x) {
            current_circle.drawCircle(ctx);
            for (var k = 1; k < circles.length; k++) {
                current_circle.drawLine(ctx, circles[k])
            }
        }
        requestAnimationFrame(draw)
    }

    let init = function (num) {
        for (var i = 0; i < num; i++) {
            circles.push(new Circle(Math.random() * w, Math.random() * h));
        }
        draw();
    }

    window.addEventListener('load', init(60));

    window.onmousemove = function (e) {
        e = e || window.event;
        current_circle.x = e.clientX;
        current_circle.y = e.clientY;
    }

    window.onmouseout = function () {
        current_circle.x = null;
        current_circle.y = null;
    }
</script>