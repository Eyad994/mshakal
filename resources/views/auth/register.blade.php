@extends('mshakal.home')

@section('content')

    <div id="account-register" class="container">

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

            </aside>
            <div id="content" class="col-sm-9">
                <h1>Register Account</h1>
                <p>If you already have an account with us, please login at the <a href="{{ route('login') }}">login
                        page</a>.</p>
                <form action="{{ route('register') }}" method="post" class="form-horizontal">
                    @csrf

                    <fieldset id="account">
                        <legend>Your Personal Details</legend>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="name">Name</label>
                            <div class="col-sm-10">
                                <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <p style="color: red;">{{ $message }}</p>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="email">E-Mail</label>
                            <div class="col-sm-10">
                                    <input id="email" type="email" placeholder="E-Mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <p style="color: red;">{{ $message }}</p>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="phone_number">Phone Number</label>
                            <div class="col-sm-10">
                                <input id="phone_number" placeholder="Phone Number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                     <p style="color: red;">{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Your Password</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="password">Password</label>
                            <div class="col-sm-10">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <p style="color: red;">{{ $message }}</p>
                                        </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="password-confirm">Password Confirm</label>
                            <div class="col-sm-10">
                                <input id="password-confirm" placeholder="Password Confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </fieldset>

                    <div class="buttons">
                        <div class="pull-right">
                            <input type="submit" value="Continue" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
