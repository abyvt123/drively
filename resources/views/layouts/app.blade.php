<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/drively/contact4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Sep 2021 06:36:01 GMT -->
<head>
    <title>Drively - Bootstrap 4 premium MultePage HTML template</title>
    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('css/regular.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/brands.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/solid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" class="color-switcher-link">
    <script src="{{asset('js/vendor/modernizr-custom.js')}}"></script>

    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>

    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="widget widget_search">
            <form method="get" class="searchform search-form" action="https://html.modernwebtemplates.com/">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                </div>
                <button type="submit" class="btn">Search</button>
            </form>
        </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="mail_modal">
        <div class="container">
            <div class="row c-gutter-0 align-items-center">
                <div class="ls col-md-12 col-lg-6">
                    <form class="contact-form c-mb-10 c-gutter-10" method="post" action="https://html.modernwebtemplates.com/">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4><span class="color-main">Email</span> Us</h4>
                                <div class="divider-sm-0 divider-md-30"></div>
                                <div class="form-group has-placeholder">
                                    <label for="name">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="email">Email address<span class="required">*</span></label>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="form-group has-placeholder">
                                    <label for="message">Message</label>
                                    <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-outline-darkgrey">Email Us</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-md-12 col-lg-6">
                    <img src="{{asset('images/email-modal.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="sign_up_modal">
        <div class="container">
            <div class="row c-gutter-0 align-items-center">
                <div class="ls col-12 col-sm-6">
                    <form class="contact-form sign-in c-mb-10 c-gutter-10" method="post" action="https://html.modernwebtemplates.com/">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4><span class="color-main">Sign Up</span> / Sign In</h4>
                                <div class="divider-sm-0 divider-md-30"></div>
                                <div class="form-group has-placeholder">
                                    <label for="name">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="signupname" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="password">Password<span class="required">*</span></label>
                                    <input type="password" aria-required="true" size="30" value="" name="password" id="signuppassword" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="signupemail" class="form-control" placeholder="Email">
                                </div>
                                <div>
                                    <input type="checkbox" class="checkbox" id="signupcheckbox" />
                                    <label for="signupcheckbox">I agree with all the text in the agreement</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" id="contact_signupform_submit" name="contact_submit" class="btn btn-outline-darkgrey">Email Us</button>
                                </div>
                            </div>
                            <a class="phone_modal_button sign_up_modal close-modal" data-dismiss="modal" aria-label="Close" href="#sign_in_modal"><span aria-hidden="true">I am already Member</span></a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 d-none d-sm-block">
                    <img src="{{asset('images/sing-in-modal.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="sign_in_modal">
        <div class="container">
            <div class="row c-gutter-0 align-items-center">
                <div class="ls col-12 col-sm-6">
                    <form class="contact-form sign-in c-mb-10 c-gutter-10" method="post" action="https://html.modernwebtemplates.com/">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4><span class="color-main">Sign In</span> / Sign Up</h4>
                                <div class="divider-sm-0 divider-md-30"></div>
                                <div class="form-group has-placeholder">
                                    <label for="name">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="signname" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="password">Password<span class="required">*</span></label>
                                    <input type="password" aria-required="true" size="30" value="" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" id="contact_signinform_submit" name="contact_submit" class="btn btn-outline-darkgrey">Email Us</button>
                                </div>
                            </div>
                            <a class="sign_up_modal close-modal" data-dismiss="modal" aria-label="Close" href="#sign_up_modal"><span aria-hidden="true">Forgot Password?</span></a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 d-none d-sm-block">
                    <img src="{{asset('images/sing-in-modal.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>


    <!-- Unyson messages modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap ls p-normal">
            <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
            <!--
        <ul class="list-unstyled">
            <li>Message To User</li>
        </ul>
        -->

        </div>
    </div><!-- eof .modal -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->

            <div class="header_absolute ds cover-background">

                <!--topline section visible only on small screens|-->
                <section class="page_topline ds c-my-10 s-overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-5 text-left">
                                <span class="social-icons">

                                    <a href="https://www.facebook.com/kavitha.menon.9085/" class="fa fa-facebook " title="facebook"></a>
                                    <a href="https://www.instagram.com/ka.vita3857/" class="fab fa-instagram " title="instagram"></a>
                                    <a href="https://www.youtube.com/channel/UC8jrL25_E6wbyM45u4-X3RQ" class="fab fa-youtube " title="youtube"></a>
                                    <a href="https://www.linkedin.com/in/kavita-menon-506601130/" class="fab fa-linkedin-in " title="linkedin"></a>
                                    

                                </span>
                            </div>
                            <div class="col-12 col-sm-7 text-right">

                                <ul class="small-text">
                                    <li>
                                        <p class="phone_number"><span>Questions?</span><a href="tel:855374-6211">(855) 374-6211</a></p>
                                    </li>

                                    <li>
                                        <span>
                                            <a class="phone_modal_button" href="#sign_in_modal"><span class="ico icon-profile"></span></a>
                                        </span>
                                    </li>

                                    <li>
                                        <a class="email_modal_button" href="#mail_modal"><span class="ico icon-icon"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="ico icon-comments"></span></a>
                                    </li>

                                </ul>


                            </div>
                        </div>
                    </div>
                </section>
                <!--eof topline-->

                <!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
                <header class="page_header ds justify-nav-end">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-4 col-md-5 col-11">
                                <a href="" class="logo">
                                    <img src="{{asset('images/logo.png')}}" alt="">
                                </a>
                            </div>
                            <div class="col-xl-9 col-lg-8 col-md-7 col-1">
                                <div class="nav-wrap">

                                    <!-- main nav start -->
                                    <nav class="top-nav">
                                        <ul class="nav sf-menu">


                                            <li class="active">
                                                <a href="/dashboard">Home</a>
                                                
                                            </li>

                                            <li>
                                                <a href="about.html">About</a>
                                                
                                            </li>
                                            <!-- eof pages -->

                                            <li>
                                                <a href="how-it-works.html">Courses</a>
                                            </li>

                                            <li>
                                                <a href="#">Photo Galary</a>
                                                 <!-- eof mega menu -->
                                            </li>
                                            <!-- eof features -->


                                            


                                            <!-- contacts -->
                                            <li>
                                                <a href="/contact">Contact</a>
                                                
                                            </li>
                                            <!-- eof contacts -->
                                        </ul>


                                    </nav>
                                    <!-- eof main nav -->

                                    <!--hidding includes on small devices. They are duplicated in topline-->
                                    <ul class="top-includes d-none d-xl-block">
                                        <li>
                                            <!--modal search-->
                                            <span>
                                                <a href="#" class="search_modal_button">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </span>

                                        </li>


                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- header toggler -->
                    <span class="toggle_menu"><span></span></span>
                </header>


@yield('content')  


<footer class="page_footer ds s-pt-77 s-pb-60 c-gutter-60">
                <div class="container">
                    <div class="row">
                        <div class="divider-20 d-none d-xl-block"></div>

                        <div class="col-md-6 col-xl-4 animate" data-animation="fadeInUp">

                            <div class="widget widget_text ">

                                <img src="{{asset('images/logo.png')}}" alt="">
                                <p><span class="copyright_year">&copy;2021 Kavitha Menon | All Rights Reserved</span></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-2 animate" data-animation="fadeInUp">
                            <div class="widget widget_working_hours">
                                <h3>Company</h3>
                                <ul class="list-not-style">

                                    <li>
                                        <a href="#">About us</a>
                                    </li>

                                    <li>
                                        <a href="#">Courses</a>
                                    </li>

                                    <li>
                                        <a href="#">Instructors</a>
                                    </li>

                                    <li>
                                        <a href="#">Pricing</a>
                                    </li>

                                    <li>
                                        <a href="/contact">Contact us</a>
                                    </li>

                                </ul>
                            </div>
                        </div>


                        <div class="col-md-6 col-xl-3 animate" data-animation="fadeInUp">
                            <div class="widget widget_icons_list">
                                <h3>Contacts</h3>

                                <div class="media side-icon-box">
                                    <div class="icon-styled color-main fs-14">
                                        <i class="ico icon-facebook-placeholder-for-locate-places-on-maps"></i>
                                    </div>
                                    <p class="media-body">USA, 3280 Cabell Avenue Alexandria, VA 22301</p>
                                </div>
                                <div class="media side-icon-box">
                                    <div class="icon-styled color-main fs-14">
                                        <i class="ico icon-phone-receiver"></i>
                                    </div>
                                    <p class="media-body">Tel.: +1 703-518-6099</p>
                                </div>
                                <div class="media side-icon-box">
                                    <div class="icon-styled color-main fs-14">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <p class="media-body">
                                        <a href="#"><span class="__cf_email__" data-cfemail="aac3c4ccc5eadfd9dedfcec384c9c5c7">[email&#160;protected]</span></a>
                                    </p>
                                </div>

                            </div>
                        </div>

                        

                    </div>
                </div>
            </footer>


        </div><!-- eof #box_wrapper -->
    </div><!-- eof #canvas -->


    <script data-cfasync="false" src="{{asset('../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('js/compressed.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/switcher.js')}}"></script>

    <!-- Google Map Script -->
    <script type="text/javascript" src="{{asset('https://maps.googleapis.com/maps/api/js?callback=templateInitGoogleMap&amp;key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4')}}"></script>

</body>


<!-- Mirrored from html.modernwebtemplates.com/drively/contact4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Sep 2021 06:36:01 GMT -->
</html>              