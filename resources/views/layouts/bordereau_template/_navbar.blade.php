<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box text-center">
                <a href="{{ route('front_client') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo/ir.png" alt="logo-sm-dark" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo/ir.png" alt="logo-dark" height="24">
                    </span>
                </a>

                <a href="{{ route('front_client') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo/ir.png" alt="logo-sm-light" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo/ir.png" alt="logo-light"  width="94" height="54" >
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <button type="button" class="btn btn-light btn-rounded waves-effect">{{ Auth::user()->name }}</button>

                    <button type="button" class="btn btn-light btn-rounded waves-effect">{{ Auth::user()->email }}</button>
                </div>
            </form>
        </div>

        <div class="d-flex">

            

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-sm btn-danger dropdown-item" type="submit">
                            <i class="ace-icon fa fa-power-off"></i>
                                {{ __('Se deconnecter') }}
                        </button>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-cog"></i>
                </button>
            </div>

        </div>
    </div>
</header>