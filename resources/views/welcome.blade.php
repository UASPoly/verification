<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>{{config('app.name')}} | Welcome</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-host-cloud.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
<!--

Host Cloud Template

https://templatemo.com/tm-541-host-cloud

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>UAS <em>POLY</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="functional-buttons">
            <ul>
              <li><a href="{{route('login')}}">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
              <h2>Verify Your Certificate</h2>
              <div id="search-section">
              	<form id="suggestion_form" name="gs" method="post" action="{{route('certificate.search')}}">
                @csrf
                <div class="searchText">
                    <input type="text" name="certificate_no" class="searchText" placeholder="Enter your certificate No here..." autocomplete="on">
                </div>
                    <input type="submit" name="results" class="main-button" value="Verify">
                 </form>
               <div class="advSearch_chkbox">
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Trusted Starts Here -->
    <div class="trusted-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="trusted-section-heading">
              <h4>TRUSTED BY 1,250+ HAPPY USERS WORLDWIDE</h4>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-trusted owl-carousel">
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 1">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 2">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 3">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 4">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 5">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 6">
              </div>
              <div class="trusted-item">
                <img src="assets/images/trusted-01.png" alt="trusted 7">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Trusted Ends Here -->


    <!-- Services Starts Here -->
    <div class="services-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Verification Services</span>
              <h2>Services we provide</h2>
              <p>Certificate Verification is a sevice provide by umaru Ali Shinkafi Polytechnics Sokoto to anable other individual or group the verify the our certificate any where in the world
              Thank you.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4>Verification</h4>
              <p>Aenean sit amet leo vitae tellus vehicula tincidunt vel sed lorem. Nullam tincidunt commodo magna, id aliquam sapien sollicitudin id.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4>Notification</h4>
              <p>You are not allowed to re-distribute this template as a downloadable ZIP file on any template collection website. Please <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact us</a> if you want to.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="fa fa-database"></i>
              <h4>Quality Asurance</h4>
              <p>Aenean sit amet leo vitae tellus vehicula tincidunt vel sed lorem. Nullam tincidunt commodo magna, id aliquam sapien sollicitudin id.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services Ends Here -->







    <!-- Testimonials Starts Here -->
    <div class="testimonials-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Testimonials</span>
              <h2>What they say about us</h2>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <div class="owl-testimonials owl-carousel">
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Ut elementum a elit sed tristique. Pellentesque sed semper erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quam erat, rutrum ut malesuada."</p>
                <h4>William Smith</h4>
                <span>New Co-Founder</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Quisque lacinia sed velit et maximus. Quisque dictum, lacus a malesuada finibus, arcu magna luctus risus, eu accumsan risus elit vitae lacus."</p>
                <h4>Vinny Smart</h4>
                <span>Digital Marketer</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum tincidunt dui. Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor nunc aliquet felis."</p>
                <h4>Trevor Liam</h4>
                <span>Technology Chef</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonials Ends Here -->


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>About Us</h2>
              </div>
              <p>Host Cloud is provided by TemplateMo for free of charge. Anyone can download and use this CSS Bootstrap template for commercial purposes.</p>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>test</h2>
              </div>
              <ul class="footer-list">
                <li><a href="#">Uaspoly</a></li>
                
              </ul>
            </div>
          </div>
          
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Useful Links</h2>
              </div>
              <ul class="footer-list">
                <li><a href="#">uaspoly</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>More Information</h2>
              </div>
              <ul class="footer-list">
                <li>Phone: <a href="#">08162463010</a></li>
                <li>Email: <a href="#">isahlabb22@gmail.com</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="sub-footer">
              <p>Copyright &copy; 2020 caliphate tech. soultion limited 
				- Designed by <a href="#">08162463010</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/owl.js')}}"></script>
    <script src="{{asset('assets/js/accordions.js')}}"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>