@extends('welcome')

@section('content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <!-- <h2 class="breadcrumb-title">@@title</h2> -->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Log In</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <div class="login-register-page-area section-space--ptb_80">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 m-auto">
                            <div class="login-content">

                                <div class="login-header mb-40">
                                    <h5>LOG IN YOUR ACCOUNT</h5>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" placeholder="Email" autofocus>
                                    <input id="password" type="password" name="password" required
                                        autocomplete="current-password" placeholder="Password">
                                    <div class="remember-forget-wrap mb-30">
                                        <div class="remember-wrap">
                                            <input type="checkbox">
                                            <p>Remember</p>
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="forget-wrap">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-primary btn-large">Log in</button>
                                    <div class="member-register mt-5">
                                        <p> Not a member? <a href="{{route('register')}}"> Register now</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
