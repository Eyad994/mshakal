@extends('mshakal.home')

@section('content')

    <div id="account-login" class="container">

        <div style="height: 50px"></div>
        <div class="row">

            <aside id="column-left" class="col-sm-3 hidden-xs">
                <div class="box">
                    <div class="box-heading">Account</div>
                    <div class="list-group">

                        <a href="{{ route('home') }}" class="list-group-item">Home </a>
                        <a href="{{ route('login') }}" class="list-group-item">Login </a>
                        <a href="{{ route('register') }}" class="list-group-item">Register</a>

                    </div>
                </div>

                <div class="box">
                    <div class="box-heading">Information</div>
                    <div class="list-group">
                        <a class="list-group-item" href="#">About Us </a>
                        <a class="list-group-item" href="#">Delivery Information </a>
                        <a class="list-group-item" href="#">Privacy Policy </a>
                        <a class="list-group-item" href="#">Terms &amp; Conditions </a>
                        <a class="list-group-item" href="#">Contact Us </a>
                        <a class="list-group-item" href="#">Site Map </a>
                    </div>
                </div>

            </aside><div id="content" class="col-sm-9">
                <div class="row">
                    {{--<div class="col-sm-6">
                        <div class="well">
                            <h3>New Customer</h3>
                            <p><strong>Register Account</strong></p>
                            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                            <a href="index5502.html?route=account/register" class="btn btn-primary">Continue</a></div>
                    </div>--}}
                    <div class="col-sm-12">
                        <div class="well">
                            <h3>Returning Customer</h3>
                            <p><strong>I am a returning customer</strong></p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label" for="email">E-Mail Address</label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" id="email" class="form-control  @error('email') is-invalid @enderror" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <p style="color: red;">{{ $message }}</p>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <p style="color: red;">{{ $message }}</p>
                                    </span>
                                    @enderror

                                    <a href="#">Forgotten Password</a></div>
                                <input type="submit" value="Login" class="btn btn-primary">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
