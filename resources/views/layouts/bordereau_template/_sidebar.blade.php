<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                
                <li>
                    <a href="{{ route('front_client') }}" class="fs-5 active">
                        <i class="mdi mdi-home-variant-outline"></i><span
                            class="badge rounded-pill bg-primary float-end">3</span>
                        <span>Accueil</span>
                    </a>
                </li>

                @if ($user_role == 'clients_ir')
                    <li>
                        <a href="javascript: void(0);" class=" waves-effect">
                            <i class="mdi mdi-account fs-2"></i>
                            <span>Espace clients</span>
                        </a>

                        <ul class="sub-menu" aria-expanded="true">
                            <a href=" {{ route('table_client') }} " class=" waves-effect">
                                <i class="mdi mdi-account fs-2"></i>
                                <span>Liste clients</span>
                            </a>
                            <li>
                                <a href="{{ route('liste_bordereaux') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-file-account  fs-2"></i>
                                    <span>Bordereaux</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="{{ route('retours') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-ab-testing fs-2"></i>
                                    <span>Retours</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="{{ route('verification') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-gradient fs-2"></i>
                                    <span>Verifications</span>
                                </a>
                                
                            </li>
                            
                        </ul>
                    </li>
                @endif
                
                <li class="menu-title">Administrateur</li>
                @if ($user_role == 'admin')
                    <li>
                        <a href="javascript: void(0);" class=" waves-effect">
                            <i class="mdi mdi-account fs-2"></i>
                            <span>Espace administrateur</span>
                        </a>

                        <ul class="sub-menu" aria-expanded="true">
                            <a href=" {{ route('table_client') }} " class=" waves-effect">
                                <i class="mdi mdi-account fs-5"></i>
                                <span>Liste clients</span>
                            </a>
                            <li>
                                <a href="{{ route('liste_bordereaux') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-file-account  fs-5"></i>
                                    <span>Bordereaux</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="{{ route('retours') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-ab-testing fs-5"></i>
                                    <span>Retours</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="{{ route('verification') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-gradient fs-5"></i>
                                    <span>Verifications</span>
                                </a>
                                
                            </li>

                            <li class="menu-title">Contrôle Coursier</li>

                            <li>
                                <a href="{{ route('retours') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-ab-testing fs-2"></i>
                                    <span>Coursiers</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="{{ route('verification') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-gradient fs-2"></i>
                                    <span>Facteur dépôts</span>
                                </a>
                                
                            </li>
                        </ul>
                        
                    </li>


                    <li class="menu-title">Paramêtre</li>
                
                    <li>
                        <a href="javascript: void(0);" class=" waves-effect">
                            <i class="mdi mdi-account-cog fs-2"></i>
                            <span>Espace Paramêtre</span>
                        </a>

                        <ul class="sub-menu" aria-expanded="true">
                            <a href=" {{ route('entreprise') }} " class=" waves-effect">
                                <i class="mdi mdi-arrow-expand-all fs-5"></i>
                                <span>Entreprises</span>
                            </a>
                            <li>
                                <a href="{{ route('liste_bordereaux') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-file-account  fs-5"></i>
                                    <span>Course</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="{{ route('retours') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-ab-testing fs-5"></i>
                                    <span>Souche</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="{{ route('verification') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-gradient fs-5"></i>
                                    <span>Verifications</span>
                                </a>
                                
                            </li>

                            <li class="menu-title">Contrôle Coursier</li>

                            <li>
                                <a href="{{ route('retours') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-ab-testing fs-2"></i>
                                    <span>Coursiers</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="{{ route('verification') }} " class="has-arrow waves-effect">
                                    <i class="mdi mdi-gradient fs-2"></i>
                                    <span>Facteur dépôts</span>
                                </a>
                                
                            </li>
                        </ul>
                        
                    </li>

                @endif

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->