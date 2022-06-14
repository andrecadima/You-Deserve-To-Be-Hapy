<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>You Deserve To Be Happy</title>

  <link rel="stylesheet" href="../css/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../css/assets/css/bootstrap.css">

  <link rel="stylesheet" href="../css/assets/css/maicons.css">

  <link rel="stylesheet" href="../css/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../css/assets/css/theme.css">



        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.2.2/angular-material.min.css" integrity="sha512-dMahqxu9L2XnPgHEO4mWksNGfyvOsV2rtMt5TX7OJdWbky+sw9dyMPw8gwhohmwVXAJW5zVCfdyvhutemjYuzg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js" integrity="sha512-7oYXeK0OxTFxndh0erL8FsjGvrl2VMDor6fVqzlLGfwOQQqTbYsGPv4ZZ15QHfSk80doyaM0ZJdvkyDcVO7KFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-animate/1.8.2/angular-animate.min.js" integrity="sha512-jZoujmRqSbKvkVDG+hf84/X11/j5TVxwBrcQSKp1W+A/fMxmYzOAVw+YaOf3tWzG/SjEAbam7KqHMORlsdF/eA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-aria/1.8.2/angular-aria.min.js" integrity="sha512-IP/3KOfYYFXQTJVQkBfavKkpvK8u+JD5r2C5vO3Dj3ufl7Xk0SoI0Oh2MXMFcGSAOxK6oZhWbZVWglgvZwAU+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-messages/1.8.2/angular-messages.min.js" integrity="sha512-X3xzYri4sQgIJ9lQOEJesZcYYJsdDBekZU9AuEsSXwCHJTOkcEn4Chh9kUlTzTgYKWnQNxT3H96X5boZMuco+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.2.2/angular-material.min.js" integrity="sha512-d33Yhig4j7KzFwP6m2cqIOpLlDKJBgi1XyE909d4bKaNwdZb1TF6XRbsyHHk37Sp8p7aP2u9gyykeU1SRKzPHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js" integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  


</head>
<body>

 <!-- Back to top button -->
 <body background="../css/assets/img/YDTBH2.png">

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="index.html" class="btn btn-outline rounded-pill">HOME <span class="text-primary"></span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div>
          
        </div>
        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
            <li class="nav-item active">
              
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="services.html" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="blog.html" class="nav-link">News</a>
            </li>
            <li class="nav-item">
              <a href="/ajaxnewcustomer" class="nav-link">Contact</a>
            </li>

            <li>
              <div class="helpLine">
                  Distress Helpline: +591 77978307
              </div>
            </li>
          </ul>

          <div class="ml-auto">
            <a href="../css/html/getquote.html" class="btn btn-outline rounded-pill">Get a Quote</a>
          </div>

          @if (Route::has('login'))
                <div class="hidden">
                    @auth
                        
                    @else
                    <div class="ml-3">
                        <a href="{{ route('login') }}" class="btn">Log in</a>
                    </div>
                        @if (Route::has('register'))
                        <div class="ml-3">
                            <a href="{{ route('register') }}" class="btn">Register</a>
                        </div>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="btn btn-outline rounded-pill">
            <form class="form-inline" method="POST" action="{{ route('logout') }}">
                Welcome: {{ Auth::user()->name }}
                @csrf
                <x-responsive-nav-link :href="route('logout')" class="helpLine hoverLogOut" onclick="event.preventDefault();this.closest('form').submit();">
                    Log Out
                </x-responsive-nav-link>
            </form>

            
        </div>
      </div>
    </nav>
    <br><br><br><br><br><br><br><br>
  <div class="container mt-5">
    <div class="page-banner">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-6 wow fadeInUp">
          <nav aria-label="Breadcrumb">
            <ul class="breadcrumb justify-content-center py-0 bg-transparent">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Contact</li>
            </ul>
          </nav>
          <h1 class="text-center">Earn a Job</h1>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="page-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 py-3 wow fadeInUp">
        <h2 class="title-section">ASAP!</h2>
        <div class="divider"></div>
        <p>We will contact you ASAP to let you know if you qualify as one of our team members!<br></p>

        <ul class="contact-list">
          <li>
            <div class="icon"><span class="mai-map color-correction"></span></div>
            <div class="content">123 Fake Street, New York, USA</div>
          </li>
          <li>
            <div class="icon"><span class="mai-mail color-correction"></span></div>
            <div class="content"><a href="https://mail.google.com/mail/u/0/#inbox/FMfcgzGllMNdTSvWVMlGjrnWWmKXNsGf?compose=GTvVlcSGMvfvkCqQzvPBXNVwLDgWxhCwhzzHMJtdPtvnwWzTkTkwxpKNQGwCFgjksmsKrwmcHVpMM">andyxannie.love@gmail.com</a></div>
          </li>
          <li>
            <div class="icon"><span class="mai-phone-portrait color-correction"></span></div>
            <div class="content"><a >+591 77978307</a></div>
          </li>
        </ul>
      </div>
      <div class="col-lg-6 py-3 wow fadeInUp">
        <div class="subhead">Contact Us</div>
        <div class="divider"></div>
        
        <!--<form action="#">
          <div class="py-2">
            <input type="text" class="form-control" placeholder="Name">
          </div>

          <div class="py-2">
            <input type="text" class="form-control" placeholder="Last Name">
          </div>


          <div class="py-2">
            <input type="text" class="form-control" placeholder="Email">
          </div>
          <div class="py-2">
            <textarea rows="6" class="form-control" placeholder="Enter message"></textarea>
          </div>
          <button type="submit" class="btn btn-outline-warning rounded-pill mt-4">Send Message</button>
        </form>
        -->
                        <script type="text/javascript">
                            var app = angular.module('EmployeeNewModule', []);
                            app.controller('EmployeeNewController',($scope, $http) => {
                                $scope.employee = {}

                                $scope.postEmployee = () => {
                                    $http.post('/employees', $scope.employee).then((result) => {
                                    window.location.href = '/thankyou'
                                    })
                                }
                            })
                        </script>





                        <form ng-app="EmployeeNewModule" ng-controller="EmployeeNewController">
                            <h2>Therapist Job Appliance</h2>
                                <div>
                                    First Name:
                                    <input type="text" class="form-control" ng-model="employee.firstName">
                                </div>

                                <div>
                                    Last Name:
                                    <input type="text" class="form-control" ng-model="employee.lastName">
                                </div>

                                <div>
                                    Birth Date:
                                    <input type="text" class="form-control" ng-model="employee.birthDate">
                                </div>

                                <div>
                                    City:
                                    <input type="text" class="form-control" ng-model="employee.city">
                                </div>

                                <div>
                                    Address:
                                    <textarea class="form-control" ng-model="employee.address"></textarea>
                                </div>

                                <div>
                                    Religion:
                                    <textarea class="form-control" ng-model="employee.photo"></textarea>
                                </div>

                                <div>
                                    User Name:
                                    <input type="text" class="form-control" ng-model="employee.username">
                                </div>

                                <div>
                                    Email:
                                    <input type="text" class="form-control" ng-model="employee.email">
                                </div>

                                <div>
                                    Password:
                                    <input type="password" class="form-control" ng-model="emloyee.password">
                                </div>

                                <div>
                                <button  type="button" ng-click="postEmployee()" class="btn btn-primary">Submit</button>
                                <a href="{{ '/listemployees' }}" class="btn btn-primary">Return</a>
                                </div>

                            </form>


      </div>
    </div>
  </div> <!-- .container -->
</div> <!-- .page-section -->


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
          <li><a href="../css/html/about.html">How it works</a></li>
          <li><a href="../css/html/index.html">Pricing</a></li>
          <li><a href="../css/html/bug.html">Report a Bug</a></li>
        </ul>
      </div>
      <div class="col-lg-3 py-3">
        <h5>About Us</h5>
        <ul class="footer-menu">
          <li><a href="../css/html/about.html">About Us</a></li>
          <li><a href="../css/html/jobs.html">Jobs</a></li>
          <li><a href="../css/html/services.html">Our Teams</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="../css/html/blog.html">News & Press</a></li>
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
          <a href="/ajaxnewcustomer" class="btn">Contact Us</a>
        </div>
      </div>
    </div>
  </div> <!-- .container -->
</footer> <!-- .page-footer -->

  <script src="../css/assets/js/jquery-3.5.1.min.js"></script>

  <script src="../css/assets/js/bootstrap.bundle.min.js"></script>

  <script src="../css/assets/vendor/wow/wow.min.js"></script>

  <script src="../css/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../css/assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="../css/assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="../css/assets/js/google-maps.js"></script>

  <script src="../css/assets/js/theme.js"></script>

  <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->


</body>
</html>