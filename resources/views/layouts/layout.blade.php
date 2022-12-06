<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>News HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="/public/assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="/public/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="/public/assets/css/ticker-style.css">
            <link rel="stylesheet" href="/public/assets/css/flaticon.css">
            <link rel="stylesheet" href="/public/assets/css/slicknav.css">
            <link rel="stylesheet" href="/public/assets/css/animate.min.css">
            <link rel="stylesheet" href="/public/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="/public/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="/public/assets/css/themify-icons.css">
            <link rel="stylesheet" href="/public/assets/css/slick.css">
            <link rel="stylesheet" href="/public/assets/css/nice-select.css">
            <link rel="stylesheet" href="/public/assets/css/style.css">
   </head>

   <body class="bg-light">
    <div class="content-wrapper">
        <div class="container mt-2">
          <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
          </div>
          
        </div>
    @include('layouts.header')
    
    @yield('content')
    

    <footer>
      
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center justify-content-between">
                         <div class="col-lg-6">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-lg-6">
                             <div class="footer-menu f-right">
                                 <ul>                             
                                     <li><a href="#">Terms of use</a></li>
                                     <li><a href="#">Privacy Policy</a></li>
                                     <li><a href="#">Contact</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    
     <!-- JS here -->
     
         <!-- All JS Custom Plugins Link Here here -->
         <script src=".//public/assets/js/vendor/modernizr-3.5.0.min.js"></script>
         <!-- Jquery, Popper, Bootstrap -->
         <script src=".//public/assets/js/vendor/jquery-1.12.4.min.js"></script>
         <script src=".//public/assets/js/popper.min.js"></script>
         <script src=".//public/assets/js/bootstrap.min.js"></script>
         <!-- Jquery Mobile Menu -->
         <script src=".//public/assets/js/jquery.slicknav.min.js"></script>
 
         <!-- Jquery Slick , Owl-Carousel Plugins -->
         <script src=".//public/assets/js/owl.carousel.min.js"></script>
         <script src=".//public/assets/js/slick.min.js"></script>
         <!-- Date Picker -->
         <script src=".//public/assets/js/gijgo.min.js"></script>
         <!-- One Page, Animated-HeadLin -->
         <script src=".//public/assets/js/wow.min.js"></script>
         <script src=".//public/assets/js/animated.headline.js"></script>
         <script src=".//public/assets/js/jquery.magnific-popup.js"></script>
 
         <!-- Breaking New Pluging -->
         <script src=".//public/assets/js/jquery.ticker.js"></script>
         <script src=".//public/assets/js/site.js"></script>
 
         <!-- Scrollup, nice-select, sticky -->
         <script src=".//public/assets/js/jquery.scrollUp.min.js"></script>
         <script src=".//public/assets/js/jquery.nice-select.min.js"></script>
         <script src=".//public/assets/js/jquery.sticky.js"></script>
         
         <!-- contact js -->
         <script src=".//public/assets/js/contact.js"></script>
         <script src=".//public/assets/js/jquery.form.js"></script>
         <script src=".//public/assets/js/jquery.validate.min.js"></script>
         <script src=".//public/assets/js/mail-script.js"></script>
         <script src=".//public/assets/js/jquery.ajaxchimp.min.js"></script>
         
         <!-- Jquery Plugins, main Jquery -->	
         <script src=".//public/assets/js/plugins.js"></script>
         <script src=".//public/assets/js/main.js"></script>
         
     </body>
 </html>