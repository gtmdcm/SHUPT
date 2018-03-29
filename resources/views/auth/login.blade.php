@extends('layouts.app')

@section('title', 'register')

@section('content')
<h2>
    <span>
        <img src="./images/testsierra.png" alt="sierra">
    </span>
    <span>SHUPT</span>
</h2>
<form method="POST" action="{{route('login')}}">
    @csrf
    <div class="form-group">
        <label for="user" class="control-label">邮箱</label>
        <div>
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email"
                   name="email" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="control-label">密码</label>
        <div>
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password"
                   name="password" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox"
                           name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('记住我') }}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="btn-group">
            <button type="submit" class="btn btn-primary" id="loginbtn">
                <span class="glyphicon glyphicon-ok"></span>
                登录
            </button>
        </div>
    </div>
</form>
