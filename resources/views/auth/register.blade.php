@extends('auth.layout')
@section('class_body','sing-up-page')
@section('content')
    <div id="log-in" class="site-form log-in-form">

        <div id="log-in-head">

            <h1>ثبت نام</h1>
            <div id="logo"><a href="{{route('index')}}"><img src="{{asset('img/logo.png')}}" alt=""></a></div>
        </div>

        <div class="form-output">
            <x-validation></x-validation>
            <form action="{{route('register.store')}}" method="post">

                @csrf
                <div class="form-group label-floating">
                    <label class="control-label">نام</label>
                    <input class="form-control" name="first_name" placeholder="" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">ایمیل</label>
                    <input class="form-control" name="email" placeholder="" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">رمز عبور</label>
                    <input class="form-control" placeholder="" name="password" type="password">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">تأیید رمز عبور</label>
                    <input class="form-control" placeholder="" name="password_confirmation" type="password">
                </div>


                <div class="remember">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember">
                            مرا به خاطر بسپار
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-lg btn-primary full-width">ثبت نام</button>

                <div class="or"></div>




                <p>شما یک حساب کاربری دارید؟ <a href="{{route('login.create')}}"> ورود!</a> </p>
            </form>
        </div>
    </div>
@endsection


