
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('dash.layouts.shared/title-meta', ['title' => $title])
        @include('dash.layouts.shared/head-css')
    </head>

    <body data-layout-mode="detached" @yield('body-extra')>

        <!-- Begin page -->
        <div id="wrapper">

            @include('dash.layouts.shared/topbar')

            @include('dash.layouts.shared.left-sidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    @yield('content')

                </div>
                <!-- content -->

                @include('dash.layouts.shared/footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        @include('dash.layouts.shared/right-sidebar')

        @include('dash.layouts.shared/footer-script')
    </body>
</html>