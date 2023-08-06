<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,600" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous" /> --}}
    {{-- <link rel="stylesheet" href="css/linearicons.css"> --}}
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    {{-- <link rel="stylesheet" href="css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Home.blade.php</title>
</head>
    <body>
        <header>
            <div class="container">
            <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
            <div class="logo">
            <a href="{{url('/')}}"><img src="img/logo(3).png" alt="logo" style="width:100px" ></a>
            </div>
            <div class="main-menubar d-flex align-items-center">
            <nav class="hide">
            <a href="{{ url('/' . $page='home') }}">Home</a>
            <a href="{{ url('/'. $page='videos') }}">Videos</a>
            <a href="{{ url('/' . $page='signup') }}">Register</a>
            <a href="{{ url('/' . $page='signin') }}">Login</a>
            <a href="{{ url('/'. $page='index') }}">Dashboard</a>
            </nav>
            <div class="menu-bar">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#f0f2f5}</style><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
            </div>
            </div>
            </div>
            </div>
            </div>
            </header>
        <!--  -->
            <div class="banner-area">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                <div class="row height align-items-center justify-content-center">
                <div class="col-lg-7">
                <div class="banner-content text-center">
                <h4 class="text-uppercase">your best gym</h4>
                <h1>Fox Gym</h1>
                <a href="#" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
                </div>
                </div>
                </div>
                </div>
         <!--  -->
                <div class="main-wrapper">
                    <section class="featured-area pt-100 pb-100">
                    <div class="container">
                    <div class="row align-items-center">
                    <div class="col-md-6">
                    <div class="feature-left">
                    <h2>
                    Reasons To <br>
                    <span>Choose</span> Notebook
                    </h2>
                    <p>
                    Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                    <button class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></button>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="feature-right active-feature-carousel">
                    <div class="single-slider item">
                    <img src="img/landing.jpg" alt>
                    </div>
                    <div class="single-slider item">
                    <img src="img/landing2.jpg" alt>
                    </div>
                    <div class="single-slider item">
                    <img src="img/landing3.jpg" alt>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
         <!--  -->

                    </section>
                    
                    
                    <section class="parallux-area pt-100 pb-100 relative" data-parallax="scroll" data-image-src="img/gym01.png">
                    <div class="overlay overlay-bg"></div>
                    <div class="container">
                    <div class="row justify-content-end">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                    <h2>
                    Reasons To <br>
                    <span>Choose</span> Notebook
                    </h2>
                    <p>
                    Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                    <a href="#" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                    </div>
                    </div>
                    </div>
         <!--  -->

                    </section>
                    
                    
                    <section class="service-area">
                    <div class="container">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="single-service" style="background: url(img/img1.jpg);">
                    <div class="overlay overlay-content">
                    <h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="single-service" style="background: url(img/img2.jpg);">
                    <div class="overlay overlay-content">
                    <h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="single-service" style="background: url(img/img3.jpg);">
                    <div class="overlay overlay-content">
                    <h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="single-service" style="background: url(img/img4.jpg);">
                    <div class="overlay overlay-content">
                    <h4 class="text-uppercase">Becoming A Dvd Repair Expert Online</h4>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
         <!--  -->
                    </section>
                    
                    
                    <section class="contact-area pt-100 pb-100 relative">

                    <div class="overlay overlay-bg"></div>
                    <div class="container">
                    <div class="row justify-content-center text-center">
                    <div class="single-contact col-lg-6 col-md-8">
                    <h2 class="text-white">Send Us <span>Message</span></h2>
                    <p class="text-white">
                    Most people who work in an office environment, buy computer products.
                    </p>
                    </div>
                    </div>
                    <form id="myForm" action="mail.php" method="post" class="contact-form">
                    <div class="row justify-content-center">
                    <div class="col-lg-5">
                    <input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-20" required type="text">
                    </div>
                    <div class="col-lg-5">
                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-20" required type="email">
                    </div>
                    <div class="col-lg-10">
                    <textarea class="common-textarea mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required></textarea>
                    </div>
                    <div class="col-lg-10 d-flex justify-content-end">
                    <button class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span class="text-black mr-10">Send Message</span><span class="text-black lnr lnr-arrow-right"></span></button> <br>
                    </div>
                    <div class="alert-msg"></div>
                    </div>
                    </form>
                    </div>
         <!--  -->

                    </section>
                    {{--  --}}
                    <section class="newsletter-area pt-100 pb-100">

                    <div class="container">
                    <div class="row justify-content-center align-items-center">
                    <div class="text-center">
                    <h3>Subscribe for our <span>Newsletter</span></h3>
                    <div class="subcribe-form" id="mc_embed_signup">
                    <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                    <input name="EMAIL" placeholder="Your Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email address'" required type="email">
                    <div style="position: absolute; left: -5000px;">
                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value type="text">
                    </div>
                    <button class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></button>
                    <div class="info">
                    </div>
                    </form>
                    </div>
                    <p>We won’t send any types of spam, Guranteed</p>
                    </div>
                    </div>
                    </div>
         <!--  -->

                    </section>
                    {{--  --}}
                    <section class="color-change relative">
                        <div class="container">
                            <a id="change-color-btn" class="primary-btn d-inline-flex align-items-center mt-10 mb-10" style="
                            color: #fff;
                        ">
                                <span class="mr-10">Change Color</span><span class="lnr lnr-arrow-right"></span>
                            </a>
         <!--  -->

                        </div>
                    </section>
                    {{--  --}}
                    <footer class="footer-area relative">
                    <div class="container">
                    <div class="footer-content d-flex flex-column align-items-center">
                    <div class="footer-menu">
                        <a href="{{ url('/' . $page='home') }}">Home</a>
                        <a href="{{url('/videos')}}">Videos</a>
                        <a href="{{ url('/' . $page='signup') }}">Register</a>
                        <a href="{{ url('/' . $page='signin') }}">Login</a>
                        <a href="{{ url('/'. $page='index') }}">Dashboard</a>
                    </div>
                    <div class="footer-social">
                    <a href="https://www.facebook.com/profile.php?id=100089697410358" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#edeff3}</style><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>                </a>
                    <a href="https://twitter.com/Seifoox_7" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#eff0f0}</style><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a>
                    <a href="https://www.instagram.com/seifoox_7/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                    <a href="https://www.youtube.com/channel/UCN9EzuTxBnMyj_yJ8n9Vyfg" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#f7f7f8}</style><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></a>
                    </div>
                    
                    <div class="copy-right-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></div>
                    
                    </div>
                    </div>
                    </footer>
    </body>
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script></html>