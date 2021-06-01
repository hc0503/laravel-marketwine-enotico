<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.shared.title-meta', ['title' => "Error Page | 404 | Page not Found"])


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

                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="error-text-box">
                                    <svg viewBox="0 0 600 200">
                                        <!-- Symbol-->
                                        <symbol id="s-text">
                                            <text text-anchor="middle" x="50%" y="50%" dy=".35em">404!</text>
                                        </symbol>
                                        <!-- Duplicate symbols-->
                                        <use class="text" xlink:href="#s-text"></use>
                                        <use class="text" xlink:href="#s-text"></use>
                                        <use class="text" xlink:href="#s-text"></use>
                                        <use class="text" xlink:href="#s-text"></use>
                                        <use class="text" xlink:href="#s-text"></use>
                                    </svg>
                                </div>
                                <div class="text-center">
                                    <h3 class="mt-0 mb-2">Whoops! Page not found </h3>
                                    <p class="text-muted mb-3">It's looking like you may have taken a wrong turn. Don't worry...
                                        it happens to the best of us. You might want to check your internet connection.
                                        Here's a little tip that might help you get back on track.</p>

                                    <a href="{{route('index')}}" class="btn btn-success waves-effect waves-light">Back to Dashboard</a>
                                </div>
                                <!-- end row -->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

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