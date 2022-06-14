<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Login
  </title>
  <!-- Favicon -->
  <link href="../css/assets/img/brand/serveYou.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../css/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../css/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../css/assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />

  <link rel="stylesheet" href="../css/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../css/assets/css/bootstrap.css">

  <link rel="stylesheet" href="../css/assets/css/maicons.css">

  <link rel="stylesheet" href="../css/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../css/assets/css/theme.css">

</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../index.html">
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="../css/assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="../examples/login.html">
                <i class="ni ni-key-25 text-black"></i>
                <span class="nav-link-inner--text text-black">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="../examples/profile.html">
                <i class="ni ni-single-02 text-black"></i>
                <span class="nav-link-inner--text text-black">Profile</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-black">Welcome!</h1>
              
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary2 shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
              <div class="text-center">
                <a href="#" class="btn btn-neutral btn-icon mr-4">
                  <span class="btn-inner--icon"><img src="../css/assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../css/assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Or sign up with credentials</small>
              </div>
                    <div>
                            <x-guest-layout>
                                <x-auth-card>
                                    <x-slot name="logo">
                                        <a href="/">
                                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                        </a>
                                    </x-slot>

                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                    <h1>
                                        Bienvenido
                                    </h1>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <!-- Email Address -->
                                        <div>
                                            <x-label for="email" :value="__('Email')" />

                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                        </div>

                                        <!-- Password -->
                                        <div class="mt-4">
                                            <x-label for="password" :value="__('Password')" />

                                            <x-input id="password" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="current-password" />
                                        </div>

                                        <!-- Remember Me -->
                                        <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>

                                        <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif

                                            <x-button class="ml-3">
                                                {{ __('Log in') }}
                                            </x-button>
                                        </div>
                                    </form>
                                </x-auth-card>
                            </x-guest-layout>
                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <div class="page-section client-section">
      <div class="container-fluid">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
          <div class="item">
            <img src="../assets/img/one.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/two.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/three.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/one.png" alt="">
          </div>
          <div class="item">
            <img src="../assets/img/two.png" alt="">
          </div>
        </div>
      </div> <!-- .container-fluid -->
  </main>

  <footer class="page-footer">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-3 py-3">
          <h3>YOU DESERVE TO BE<span class="color-correction"> HAPPY.</span></h3>
          <p>Always with you</p>

          <p><a href="https://mail.google.com/mail/u/0/#inbox/FMfcgzGllMNdTSvWVMlGjrnWWmKXNsGf?compose=GTvVlcSGMvfvkCqQzvPBXNVwLDgWxhCwhzzHMJtdPtvnwWzTkTkwxpKNQGwCFgjksmsKrwmcHVpMM" class="color-correction">andyxannie.love@gmail.com</a></p>
          <p><a class="color-correction">+591 77978307</a></p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Quick Links</h5>
          <ul class="footer-menu">
            <li><a href="../html/about.html">How it works</a></li>
            <li><a href="../html/index.html#pricing">Pricing</a></li>
            <li><a href="../html/bug.html">Report a Bug</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>About Us</h5>
          <ul class="footer-menu">
            <li><a href="../html/about.html">About Us</a></li>
            <li><a href="../html/jobs.html">Jobs</a></li>
            <li><a href="../html/services.html">Our Teams</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="../html/blog.html">News & Press</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Subscribe</h5>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your mail..">
          </form>

          <div class="sosmed-button mt-4">
            <a href="https://www.facebook.com/You-Deserve-to-Be-Happy-101993559015820"><span class="mai-logo-facebook-f"></span></a>
            <a href="https://twitter.com/HoneyFar7"><span class="mai-logo-twitter"></span></a>
            <a href="https://www.linkedin.com/in/you-deserve-to-be-happy-7b592b228/"><span class="mai-logo-linkedin"></span></a>
            <a href="https://www.instagram.com/youdeservetobehappy20/"><span class="mai-logo-instagram"></span></a>
            <a ><span class="mai-logo-android"></span></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 py-2">
          <p id="copyright">&copy; 2021<a href="https://www.instagram.com/andrecadima_/" class="btn">Andy x Annie</a>All rights reserved</p>
        </div>
        <div class="col-sm-6 py-2 text-right">
          <div class="d-inline-block px-3">
            <a href="#" class="btn">Privacy</a>
          </div>
          <div class="d-inline-block px-3">
            <a href="../html/contact.html" class="btn">Contact Us</a>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->
</body>

</html>
