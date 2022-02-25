
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <title>Login | Alerte Info Mobile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
        <meta name="description" content="Tableau de bord application mobile.">
        <meta name="author" content="Alerte Info">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    </head>

    <body class="bg-pattern">
        <div class="bg-overlay"></div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="">
                                    <div class="text-center">
                                        <a href="index-2.html" class="">
                                            <img src="{{ asset('assets/images/logo/ir.png') }}" alt="" height="130" class="auth-logo logo-dark mx-auto">
                                            <img src="{{ asset('assets/images/logo/ir.png') }}" alt="" height="130" class="auth-logo logo-light mx-auto">
                                        </a>
                                    </div>
                                    <br /><br /><br />
                                    <form class="form-horizontal" action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="email">Adresse e-mail</label>
                                                    <input type="text" class="form-control" name="email" id="email" placeholder="Adresse e-mail" autocomplete>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="password">Mot de passe</label>
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
                                                </div>

                                                
                                                <div class="d-grid mt-4">
                                                    <button class="btn btn-primary btn-lg waves-effect waves-light" type="submit">Se connecter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
       
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>

        @if($errro_success = Session::get('success'))

            <script>
                swal({
                    title: "Good job!",
                    text: "{{  $errro_success }}",
                    icon: "success",
                    button: "Aww yiss!",
                });

            </script>

        @endif

        @if($errro_danger = Session::get('errors'))

            <script>
                swal({
                    title: "Alerte !",
                    text: "{{  __($errro_danger) }}",
                    icon: "error",
                    button: "Ok!",
                });
            </script>


        @endif

    </body>

</html>
