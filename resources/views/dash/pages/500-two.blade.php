<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.shared.title-meta', ['title' => "Error Page | 500 | Internal Server Error"])

        @include('layouts.shared.head-css')

    </head>

    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-left">
                            <div class="auth-logo">
                                <a href="{{route('index')}}" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="22">
                                    </span>
                                </a>
            
                                <a href="{{route('index')}}" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="22">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="text-center">
                            <h1 class="text-error">500</h1>
                            <h3 class="mt-3 mb-2">Internal Server Error</h3>
                            <p class="text-muted mb-3">Why not try refreshing your page? or you can contact <a href="" class="text-dark"><b>Support</b></a></p>

                            <a href="{{route('index')}}" class="btn btn-success waves-effect waves-light">Back to Home</a>
                        </div>

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted"><script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="javascript: void(0);" class="text-muted">Coderthemes</a> </p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        @include('layouts.shared.footer-script')

        
    </body>
</html>