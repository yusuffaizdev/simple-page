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
                              <li class="breadcrumb-item active">Register</li>
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
                                      <h3 class="mb-2">Register</h3>
                                      <h5>Become a member</h5>
                                  </div>

                                  <form method="POST" action="{{ route('register') }}">
                                      @csrf
                                      <input type="text" placeholder="Username" name="name" value="{{ old('name') }}"
                                          required autocomplete="name" autofocus>
                                      <input type="email" placeholder="Email Address" name="email"
                                          value="{{ old('email') }}" required autocomplete="email">
                                      <input type="password" placeholder="Password" name="password" required
                                          autocomplete="new-password">
                                      <input id="password-confirm" type="password" placeholder="Password"
                                          name="password_confirmation" required autocomplete="new-password">
                                      <div class="remember-forget-wrap">
                                          <div class="remember-wrap">
                                              <input type="checkbox">
                                              <p>Agree to the <a href="#">Terms and Conditions</a></p>
                                              <span class="checkmark"></span>
                                          </div>
                                      </div>
                                      <div class="button-box mt-4">
                                          <button type="submit" class="btn-primary btn-large">Register Now</button>
                                      </div>
                                      <div class="member-register mt-5">
                                          <p> A member? <a href="login.html"> Log in now</a></p>
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
