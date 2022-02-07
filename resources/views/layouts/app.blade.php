<!DOCTYPE html>
<html lang="lang="{{ str_replace('_', '-', app()->getLocale()) }}"">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="JobBoard - HTML Template" />
    <meta property="og:title" content="JobBoard - HTML Template" />
    <meta property="og:description" content="JobBoard - HTML Template" />
    <meta property="og:image" content="JobBoard - HTML Template" />
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title> JobBoard - Mezza App </title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/templete.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/css/skin/skin-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/css/bootstrap-datetimepicker.min.css') }}"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    @livewireScripts

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/navigation.css') }}">
    <!-- Revolution Navigation Style -->
</head>

<body id="bg">
<div id="loading-area"></div>
<div class="page-wraper">

    <!-- header -->
    @livewire('navigation-menu')
    <!-- header END -->


    @yield('content')


    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                            <img src="{{ asset('assets/images/logo-white.png') }}" width="100" class="m-b15" alt=""/>
                            <p class="text-capitalize m-b20">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the..</p>
                            <div class="subscribe-form m-b20">
                                <form class="dzSubscribe" action="http://job-board.w3itexperts.com/xhtml/script/mailchamp.php" method="post">
                                    <div class="dzSubscribeMsg"></div>
                                    <div class="input-group">
                                        <input name="dzEmail" required="required"  class="form-control" placeholder="Your Email Id" type="email">
                                        <span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button radius-xl">Subscribe</button>
										</span>
                                    </div>
                                </form>
                            </div>
                            <ul class="list-inline m-a0">
                                <li><a href="#" class="site-button white facebook circle "><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="site-button white google-plus circle "><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="site-button white linkedin circle "><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="site-button white instagram circle "><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="site-button white twitter circle "><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-8 col-sm-8 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Frequently Asked Questions</h5>
                            <ul class="list-2 list-line">
                                <li><a href="#">Privacy & Seurty</a></li>
                                <li><a href="#">Terms of Serice</a></li>
                                <li><a href="#">Communications</a></li>
                                <li><a href="#">Referral Terms</a></li>
                                <li><a href="#">Lending Licnses</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">How It Works</a></li>
                                <li><a href="#">For Employers</a></li>
                                <li><a href="#">Underwriting</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Lending Licnses</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Find Jobs</h5>
                            <ul class="list-2 w10 list-line">
                                <li><a href="#">US Jobs</a></li>
                                <li><a href="#">Canada Jobs</a></li>
                                <li><a href="#">UK Jobs</a></li>
                                <li><a href="#">Emplois en Fnce</a></li>
                                <li><a href="#">Jobs in Deuts</a></li>
                                <li><a href="#">Vacatures China</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center"><span><a target="_blank" href="http://projects.elinonga.com/"> David Mezza </a></span></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->

    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>

</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('assets/plugins/wow/wow.js') }}"></script><!-- WOW JS -->
<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('assets/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('assets/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('assets/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('assets/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('assets/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('assets/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('assets/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('assets/plugins/rangeslider/rangeslider.js') }}" ></script><!-- Rangeslider -->
<script src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('assets/js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src='{{ asset('assets/js/recaptcha/api.js') }}'></script> <!-- Google API For Recaptcha  -->
<script src="{{ asset('assets/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('assets/plugins/paroller/skrollr.min.js') }}"></script><!-- PAROLLER -->
<script src="{{ asset('assets/plugins/datepicker/js/bootstrap-datepicker.min.js') }}"></script><!-- Image Picker JS -->

@livewireScripts

</body>

</html>
