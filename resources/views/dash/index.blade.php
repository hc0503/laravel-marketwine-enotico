<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Enotico - Marketplace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('dash/assets/images/favicon.ico')}}">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('dash/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />

        <!--Material Icon -->
        <link href="{{asset('dash/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Custom  sCss -->
        <link href="{{asset('dash/assets/css/landing.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="logo text-uppercase" href="index.html">
                    <img src="{{asset('dash/assets/images/landing/logo-light.png')}}" alt="" class="logo-light" height="21" />
                    <img src="{{asset('dash/assets/images/landing/logo-dark.png')}}" alt="" class="logo-dark" height="21" />
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#features" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                            <a href="#demo" class="nav-link">Demos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#faq" class="nav-link">Faqs</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto navbar-center">
                        <li class="nav-item">
                            <a href="{{route('second', ['auth', 'login'])}}" class="nav-link">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('second', ['auth', 'register'])}}" class="nav-link">Sign Up</a>
                        </li>
                    </ul>
                    <a class="btn btn-danger navbar-btn ml-2" href=''>
                        <i class="fe-shopping-bag mr-1"></i>
                        Download Now
                    </a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- home start -->
        <section class="bg-home" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="pr-lg-4">
                                    <div class="badge badge-primary">Version 1.0</div>
                                    <h1 class="mb-4 mt-3">
                                        The Most Complete Responsive Web UI Kit &amp; Dashboard Template
                                    </h1>
            
                                    <p class="mb-4 pt-2 f-16">Ubold is a fully featured dashboard and admin template comes with tones of well designed UI elements, 
                                        components, widgets and applications and secondary pages.</p>
            
                                    <a href="#demos" class="btn btn-primary btn-lg smooth-scroll"><i class="fe-eye mr-1"></i> Preview <i class="fe-arrow-right ml-1"></i></a>
                                </div>
                            </div>
                            <div class="col-md-7 text-right">
                                <img src="{{asset('dash/assets/images/landing/main.png')}}" class="img-fluid shadow-lg animate">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home end -->


        <!-- features start -->
        <section class="section-sm" id="features">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4 pb-1">
                            <h2 class="mb-1">Features You'll Love</h2>
                            <p class="text-muted f-15">
                                A clean & modern design with many functionality and features. The clean and well commented code allows easy customization of the theme.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-3">
                                <img src="{{asset('dash/assets/images/landing/icons/browsercode.png')}}" alt="">
                            </div>
                            <h4 class="mb-2">Multiple Demos with flexible layouts</h4>
                            <p class="text-muted">
                                Ubold provides handful of different demos (skins) and layout options for different use cases. 
                            </p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-3">
                                <img src="{{asset('dash/assets/images/landing/icons/webdesign.png')}}" alt="">
                            </div>
                            <h4 class="mb-2">Clean & Modern Design</h4>
                            <p class="text-muted">Beautifully crafted, clean & modern designed apps, pages, UI elements.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-3">
                                <img src="{{asset('dash/assets/images/landing/icons/paperdesk.png')}}" alt="">
                            </div>
                            <h4 class="mb-2">10+ Applications</h4>
                            <p class="text-muted">Ready to use apps pages for Chat, CRM, Email, Social Feed, Projects, Tasks, Support Tickets, File Manager, etc.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-3">
                                <img src="{{asset('dash/assets/images/landing/icons/browserscript.png')}}" alt="">
                            </div>
                            <h4 class="mb-2">Quality Code</h4>
                            <p class="text-muted">Well-documented and well-commented source to understand the code easily.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-3">
                                <img src="{{asset('dash/assets/images/landing/icons/cloudplug.png')}}" alt="">
                            </div>
                            <h4 class="mb-2">Free Updates</h4>
                            <p class="text-muted">Free lifetime updates including new features and bug fixes.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="features-box">
                            <div class="features-img mb-3">
                                <img src="{{asset('dash/assets/images/landing/icons/phonesent.png')}}" alt="">
                            </div>
                            <h4 class="mb-2">Customer Support</h4>
                            <p class="text-muted">Get access to premium customer support from the actual people who have created.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container-fluid -->
        </section>
        <!-- features end -->

        <!-- available demos start -->
        <section class="section bg-gradient" id="demos">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center mb-3">
                            <h2 class="mb-1">Multiple Demos with flexible layouts</h2>
                            <p class="text-muted f-15">There are six different demos available now with multiple layout options to
                                cater the needs of any modern web application.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="shadow bg-white mt-4 p-2 rounded">
                            <a href="{{route('any', ['dashboard'])}}" class="text-dark">
                                <img src="{{asset('dash/assets/images/landing/demo/layout-1.png')}}" alt="" class="img-fluid mx-auto d-block">
                                <h5 class="mb-0 py-2 text-center">Default (Vertical)</h5>
                                <div class="my-2 text-center">
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('any', ['dashboard'])}}" target="_blank">Light</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'dark'])}}" target="_blank">Dark</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'default-rtl'])}}" target="_blank">RTL</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="shadow bg-white mt-4 p-2 animate rounded">
                            <a href="{{route('second', ['themes', 'creative'])}}" class="text-dark">
                                <img src="{{asset('dash/assets/images/landing/demo/layout-2.png')}}" alt="" class="img-fluid mx-auto d-block">
                                <h5 class="mb-0 py-2 text-center">Creative (Horizontal)</h5>
                                <div class="my-2 text-center">
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'creative'])}}" target="_blank">Light</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'creative-dark'])}}" target="_blank">Dark</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'creative-rtl'])}}" target="_blank">RTL</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="shadow bg-white mt-4 p-2 animate rounded">
                            <a href="{{route('second', ['themes', 'material'])}}" class="text-dark">
                                <img src="{{asset('dash/assets/images/landing/demo/layout-3.png')}}" alt="" class="img-fluid mx-auto d-block">
                                <h5 class="mb-0 py-2 text-center">Material</h5>
                                <div class="my-2 text-center">
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'material'])}}" target="_blank">Light</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'material-dark'])}}" target="_blank">Dark</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'material-rtl'])}}" target="_blank">RTL</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="shadow bg-white mt-4 p-2 animate rounded">
                            <a href="{{route('second', ['themes', 'modern'])}}" class="text-dark">
                                <img src="{{asset('dash/assets/images/landing/demo/layout-4.png')}}" alt="" class="img-fluid mx-auto d-block">
                                <h5 class="mb-0 py-2 text-center">Modern (Detached)</h5>
                                <div class="my-2 text-center">
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'modern'])}}" target="_blank">Light</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'modern-dark'])}}" target="_blank">Dark</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'modern-rtl'])}}" target="_blank">RTL</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="shadow bg-white mt-4 p-2 animate rounded">
                            <a href="{{route('second', ['themes', 'saas'])}}" class="text-dark">
                                <img src="{{asset('dash/assets/images/landing/demo/layout-6.png')}}" alt="" class="img-fluid mx-auto d-block">
                                <h5 class="mb-0 py-2 text-center">Saas (Two-Column)</h5>
                                <div class="my-2 text-center">
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'saas'])}}" target="_blank">Light</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'saas-dark'])}}" target="_blank">Dark</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'saas-rtl'])}}" target="_blank">RTL</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="shadow bg-white mt-4 p-2 animate rounded">
                            <a href="{{route('second', ['themes', 'purple'])}}" class="text-dark">
                                <img src="{{asset('dash/assets/images/landing/demo/layout-5.png')}}" alt="" class="img-fluid mx-auto d-block">
                                <h5 class="mb-0 py-2 text-center">Purple</h5>
                                <div class="my-2 text-center">
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'purple'])}}" target="_blank">Light</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'purple-dark'])}}" target="_blank">Dark</a>
                                    <a class="btn btn-success font-weight-bold btn-sm" href="{{route('second', ['themes', 'purple-rtl'])}}" target="_blank">RTL</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="text-center mt-5">
                            <a href="/dashboard" class="btn btn-primary btn-lg">More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- end container-fluid -->
        </section>
        <!-- available demos end -->


        <!-- faqs start -->
        <section class="section" id="faq">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            <h2 class="mb-1">Frequently Asked Questions</h3>
                            <p class="text-muted f-15">Here are some of the basic types of questions for our customers. For more
                                information please contact us.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q</div>
                            <h4 class="faq-question">Can I use this template for my client?</h4>
                            <p class="faq-answer mb-4 pb-1">
                                Yup, the marketplace license allows you to use this theme in any end product. For more information on licenses, please refer <a href="https://themeforest.net/licenses/standard" target="_blank">here</a>.
                            </p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question">Can this theme work with Wordpress?</h4>
                            <p class="faq-answer mb-4 pb-1">
                                No. This is a HTML template. It won't work directly with wordpress. However you can convert this into wordpress compatible theme.
                            </p>
                        </div>

                    </div>
                    <!--/col-lg-5 -->

                    <div class="col-lg-5">
                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question"> How do I get help with the theme?</h4>
                            <p class="faq-answer mb-4 pb-1">
                                Use our dedicated support email (support@coderthemes.com) to send your issues or feedback. We are here to help anytime.
                            </p>
                        </div>

                        <!-- Question/Answer -->
                        <div>
                            <div class="faq-question-q-box">Q.</div>
                            <h4 class="faq-question">Will you regularly give updates of Ubold?</h4>
                            <p class="faq-answer mb-4 pb-1">
                                Yes, We will update the Ubold regularly. All the future updates would be available without any cost.
                            </p>
                        </div>

                    </div>
                    <!--/col-lg-5-->
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </section>
        <!-- faqs end -->

        <!-- cta start -->
        <section class="section-sm bg-gradient">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h3 class="mb-0 mo-mb-20">
                            Have any questions? Get in touch with us.
                        </h3>
                    </div>
                    <div class="col-md-3">
                        <div class="text-md-right">
                            <a href="https://coderthemes.com/#contact" class="btn btn-primary btn-lg">
                                <i class="mdi mdi-email-outline mr-1"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- cta end -->

        <!-- footer start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row mb-0">
                    <div class="col-md-4">
                        <div class="pr-lg-4">
                            <div class="mb-4">
                                <img src="{{asset('dash/assets/images/landing/logo-dark.png')}}" alt="" height="20">
                            </div>
                            <p class="text">Ubold makes it easier to build better websites with great speed. Save hundreds of hours of design and development by using it.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-3 offset-md-4">
                        <h5 class="f-16 footer-list-title">Help</h5>
                        <ul class="list-unstyled mb-0 mt-3 footer-list">
                            <li><a target="_blank" href="https://coderthemes.com/#contact">Support</a></li>
                            <li><a target="_blank" href="https://coderthemes.com/#contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left pull-none">
                            <p class="">2020 © Ubold. Design by <a href="https://coderthemes.com/" target="_blank" class="">Coderthemes.com</a> </p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </footer>
        <!-- footer end -->
        
        <!-- Back to top -->    
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="{{asset('dash/assets/js/vendor.min.js')}}"></script>

        <!-- custom js -->
        <script type="text/javascript">
            ! function($) {
                "use strict";
            
                var Ubold = function() {};
            
                Ubold.prototype.initStickyMenu = function() {
                    $(window).scroll(function() {
                        var scroll = $(window).scrollTop();
                    
                        if (scroll >= 50) {
                            $(".sticky").addClass("nav-sticky");
                        } else {
                            $(".sticky").removeClass("nav-sticky");
                        }
                    });
                },
            
                Ubold.prototype.initSmoothLink = function() {
                    $('.navbar-nav a').on('click', function(event) {
                        var $anchor = $(this);
                        $('html, body').stop().animate({
                            scrollTop: $($anchor.attr('href')).offset().top - 50
                        }, 1500);
                        event.preventDefault();
                    });

                    // general
                    $("a.smooth-scroll").on('click', function(e) { 
                        e.preventDefault(); 
                        var dest = $(this).attr('href');
                        $('html,body').animate({ scrollTop: $(dest).offset().top }, 'slow'); 
                    });
                },
        
            
                Ubold.prototype.initBacktoTop = function() {
                    $(window).scroll(function(){
                        if ($(this).scrollTop() > 100) {
                            $('.back-to-top').fadeIn();
                        } else {
                            $('.back-to-top').fadeOut();
                        }
                    }); 
                    $('.back-to-top').click(function(){
                        $("html, body").animate({ scrollTop: 0 }, 1000);
                        return false;
                    });
                },
            
            
                Ubold.prototype.init = function() {
                    this.initStickyMenu();
                    this.initSmoothLink();
                    this.initBacktoTop();
                },
                //init
                $.Ubold = new Ubold, $.Ubold.Constructor = Ubold
            }(window.jQuery),
            
            //initializing
            function($) {
                "use strict";
                $.Ubold.init();
            }(window.jQuery);
        </script>
    </body>

</html>