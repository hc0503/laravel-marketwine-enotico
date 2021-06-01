
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.shared/title-meta', ['title' => $title])
        @include('layouts.shared/head-css')
    </head>

    <body data-layout-mode="horizontal" @yield('body-extra')>

        <!-- Begin page -->
        <div id="wrapper">

            @include('layouts.shared/topbar')

            @include('layouts.shared.horizontal')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    @yield('content')

                </div>
                <!-- content -->

                @include('layouts.shared/footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        @include('layouts.shared/right-sidebar')

        @include('layouts.shared/footer-script')
    </body>
</html>