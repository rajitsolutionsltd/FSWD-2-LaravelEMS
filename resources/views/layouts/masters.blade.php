<!doctype html>
<html lang="en">

    <head>
        
        @include('inc.head')

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
            
            @include('inc.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('inc.sidebar')

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        @yield('content')
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @include('inc.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        
        @include('inc.footer_script')

    </body>
</html>
