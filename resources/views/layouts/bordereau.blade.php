@include('layouts.bordereau_template._headers')

    <body data-sidebar="dark" data-sidebar-size="small">
        @if($user_role = Session::get('user_role')) @endif
        <!-- Begin page -->
        <div id="layout-wrapper">
            
            @include('layouts.bordereau_template._navbar')
            <!-- Header -->

            {{-- SIDBAR --}}

            @include('layouts.bordereau_template._sidebar')
            
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">


                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Tableau de bord </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                            <li class="breadcrumb-item active">@yield('breadcrumb-active')</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        @yield('main')


                    </div>
                </div>
                @include('layouts.bordereau_template._footer')
 

        @yield('scriptjs')
        
    </body>

</html>