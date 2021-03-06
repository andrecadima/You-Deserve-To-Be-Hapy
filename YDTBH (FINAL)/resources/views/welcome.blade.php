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

   <!-- Favicon -->
  <link href="../css/assets/img/brand/serveYou.png" rel="icon" type="image/png">


</head>
<body background="../css/assets/img/YDTBH.png">

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="../css/html/index.html" class="btn btn-outline rounded-pill">HOME <span class="text-primary"></span></a>

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
              <a href="../css/html/about.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="../css/html/services.html" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
              <a href="../css/html/blog.html" class="nav-link">News</a>
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

          <div class="ml-3">
            <a href="../css/html/getquote.html" class="btn btn-outline rounded-pill">Get a Quote</a>
          </div>

          @if (Route::has('login'))
                <div class="hidden">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
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

          
          
        </div>
      </div>
    </nav>
    <br><br><br><br><br><br><br><br>


    <div class="page-banner home-banner">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 class="mb-4">YOU DESERVE TO BE HAPPY</h1>
            <p class="text-lg mb-5"></p>

            <div class="centered">
              <a href="../css/html/blog.html" class="btn btn-outline border text-secondary">More Info</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br>
    



    <div>
      <div class="container">
        
        <div class="owl-carousel wow fadeInUp" id="testimonials">
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="../css/assets/img/mayBeDepressed.png" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>I MAY BE depressed BUT I WILL TALK ABOUT IT</p>
                  <div class="entry-footer">
                    <strong>Andre Cadima</strong> &mdash; <span class="text-grey">CEO You Deserve To Be Happy</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="../css/assets/img/iMayBeAnxious.png" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>I MAY BE anxious BUT I WILL TALK ABOUT IT</p>
                  <div class="entry-footer">
                    <strong>Andre Cadima</strong> &mdash; <span class="text-grey">CEO You Deserve To Be Happy</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="../css/assets/img/iKnowHelpIsAvailable.png" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>I KNOW help IS AVAILABLE</p>
                  <div class="entry-footer">
                    <strong>Adriana Farfan</strong> &mdash; <span class="text-grey">CO - CEO You Deserve To Be Happy</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          

          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="../css/assets/img/myFeelingsMatter.png" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>MY feelings MATTER</p>
                  <div class="entry-footer">
                    <strong>Andre Cadima</strong> &mdash; <span class="text-grey">CEO You Deserve To Be Happy</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  <img src="../css/assets/img/iDontHaveToBeAfraidToSeekHelp.png" alt="">
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>I DON'T HAVE TO be afraid TO SEEK HELP</p>
                  <div class="entry-footer">
                    <strong>Adriana Farfan</strong> &mdash; <span class="text-grey">CO-CEO You Deserve To Be Happy</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    
  </header>

    <div class="page-banner home-banner">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 class="mb-4">Emotional Tool Kit</h1>
            <p class="text-lg mb-5">Our emotions can trigger all sorts of behaviors??? uncontrollable anger, 
              crying spells, self-loathing, and other not-so-positive reactions. 
              Managing your emotions takes a dose of willpower, plenty of awareness, lots of resilience,
               among other self-care tools. Are you ready to build your own emotional toolkit? Here is what you can do:</p>
          </div>
        </div>
      </div>
    </div>

  <main>
    <div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/point1.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Pause and take a deep breathe</h5>
              </div>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/point2.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Smile and give yourself a hug</h5>
              </div>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/ponit3.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Go outdoors</h5>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/point4.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Get quality Sleep</h5>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/point5.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Eat healthy and mindfully</h5>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/point6.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Put on your favorite music and dance</h5>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/point1.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Journal your thoughts and feelings</h5>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/point2.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Spend time with your closed ones</h5>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/ponit3.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Do something creative</h5>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/point4.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Share whats's on your mind</h5>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/point5.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Loving-kindness meditation</h5>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img width="50", height="50" src="../css/assets/img/point6.png" alt="">
              </div>
              <div>
                <h5 class="size-correction">Set yourself an afirmation</h5>
              </div>
            </div>
          </div>

        </div>
      </div> 
    </div> 

    <br><br><br><br><br><br><br><br><br><br><br>


  
    <div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place text-center">
              <img src="../css/assets/img/equality.jpg.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <h2 class="title-section">We are here for <span class="color-correction">YOU</span></h2>
            <div class="divider"></div>
            <p>We at You Deserve to Be Happy believe that all individuals should be able to access mental health care. 
              We provide equality of services and care to everyone; regardless of age, 
              disability, gender identity, race, religion, belief system or sexual orientation.</p>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section counter-section">
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-lg-4">
            <p>Suicide Rate Per Year</p>
            <h2><span class="number" data-number="47106"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Suicide attempts per Year</p>
            <h2><span class="number" data-number="1859482"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Suicides per Day</p>
            <h2><span class="number" data-number="132"></span></h2>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 py-3 wow fadeInLeft">
            <h2 class="title-section">We're <span class="color-correction">ready to</span> Serve you with best</h2>
            <div class="divider"></div>
            <p class="mb-5">Our team provides full time service. We are here 24/7!</p>
            <a href="#pricing" class="btn btn-outline ml-2">See pricing</a>
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place text-center">
              <img src="../css/assets/img/serveYou.png" alt="">
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  

    <!-- Membership  -->
    <div class="page-section border-top" id="pricing">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <h2 class="title-section">Pricing Plan</h2>
          <div class="divider mx-auto"></div>
        </div>
  
        <div class="row justify-content-center">
          <div class="col-12 col-lg-auto py-3 wow fadeInLeft">
            <div class="card-pricing">
              <div class="header">
                <div class="price-icon"><span></span></div>
                <div class="price-title">Membership</div>
              </div>
              <div class="body py-3">
                <div class="price-tag">
                  <span class="currency">$</span>
                  <h2 class="display-4">2.99</h2>
                  <span class="period">/monthly</span>
                </div>
                <div class="price-info">
                  <p>Weekly delivered Material</p>
                </div>
              </div>
              <div class="footer">
                <a href="#" class="btn btn-outline rounded-pill">Choose Plan</a>
              </div>
            </div>
          </div>
  
          <div class="col-12 col-lg-auto py-3 wow fadeInUp">
            <div class="card-pricing active">
              <div class="header">
                <div class="price-labled">Best</div>
                <div class="price-icon"><span ></span></div>
                <div class="price-title">Dedicated</div>
              </div>
              <div class="body py-3">
                <div class="price-tag">
                  <span class="currency">$</span>
                  <h2 class="display-4">6.99</h2>
                  <span class="period">/monthly</span>
                </div>
                <div class="price-info">
                  <p>Weekly delivered material + 4 Hour Assistance per month </p>
                </div>
              </div>
              <div class="footer">
                <a href="#" class="btn btn-outline rounded-pill">Choose Plan</a>
              </div>
            </div>
          </div>
  
          <div class="col-12 col-lg-auto py-3 wow fadeInRight">
            <div class="card-pricing">
              <div class="header">
                <div class="price-icon"><span></span></div>
                <div class="price-title">Private</div>
              </div>
              <div class="body py-3">
                <div class="price-tag">
                  <span class="currency">$</span>
                  <h2 class="display-4">15.99</h2>
                  <span class="period">/monthly</span>
                </div>
                <div class="price-info">
                  <p>Complete Dedicated Bundle + 8 hour Assistance per Month</p>
                </div>
              </div>
              <div class="footer">
                <a href="#pricing" class="btn btn-outline rounded-pill">Choose Plan</a>
              </div>
            </div>
          </div>
          
        </div>


        

      </div> <!-- .container -->


    </div> <!-- .page-section -->

    <br><br><br><br><br><br><br><br>

    <div class="text-center wow fadeInUp">
          <h2 class="title-section">Not Seeking Help and Trying to Help?</h2>
          <h6 class="title-section">Let us see if you qualify as a therapist and earn a job with us</h6>
          <a href="newemployee" class="btn btn-outline ml-2">Apply For A Job</a>
          <div class="divider mx-auto"></div>
    </div>

    <br><br><br><br><br><br><br><br><br>
    






    <!-- Spotify Embeded code-->

    
  
    <div class="page-section client-section">
      <div class="container-fluid">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
          <div class="item">
            <img src="../css/assets/img/one.png" alt="">
          </div>
          <div class="item">
            <img src="../css/assets/img/two.png" alt="">
          </div>
          <div class="item">
            <img src="../css/assets/img/three.png" alt="">
          </div>
          <div class="item">
            <img src="../css/assets/img/one.png" alt="">
          </div>
          <div class="item">
            <img src="../css/assets/img/two.png" alt="">
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
            <li><a href="../css/html/about.html">How it works</a></li>
            <li><a href="../css/html/index.html#pricing">Pricing</a></li>
            <li><a href="../css/html/bug.html">Report a Bug</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>About Us</h5>
          <ul class="footer-menu">
            <li><a href="../css/html/about.html">About Us</a></li>
            <li><a href="newemployee">Jobs</a></li>
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
            <a href="../css/html/contact.html" class="btn">Contact Us</a>
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


</body>
</html>