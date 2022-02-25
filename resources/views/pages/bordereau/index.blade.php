@extends('layouts.bordereau')
@section('title', 'Tableau de bord')
@section('breadcrumb-active', 'Tableau de bord')
@section('main')

        <div class="row justify-content-md-center">

            @if($user_role = Session::get('user_role')) @endif
            <div class="col-xl-4 col-sm-6">
                <a href="{{ route('table_client') }}">
                    <div class="card ">
                        <div class="card-body">
                            <div class="d-flex text-muted">
                                <div class="flex-shrink-0  me-3 align-self-center">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                            <i class="ri-sun-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 text-dark">LISTE DES CLIENTS</p>
                                    <h5 class="mb-3 text-dark">23</h5>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                </a>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-4 col-sm-6">
                <a href="h">
                    <div class="card ">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0  me-3 align-self-center">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                            <i class="ri-water-flash-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 text-dark">LISTE DES BORDEREAU</p>
                                    <h5 class="mb-3 text-dark">23</h5>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </a>
            </div>
            <!-- end col -->

            <div class="col-xl-4 col-sm-6">
                <a href="h">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex text-muted">
                                <div class="flex-shrink-0  me-3 align-self-center">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                            <i class="ri-group-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1 text-dark">LISTE DES RETOURS</p>
                                    <h5 class="mb-3">23</h5>
                                </div>
                            </div>                                        
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </a>
            </div>
            <!-- end col -->

            
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row justify-content-md-center mb-4">
            <div class="col-xl-5">
                <a  data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"  class="btn btn-warning btn-lg btn-rounded fs-3">
                    <i class="fas fa-plus"></i>    Saisir un bordereau
                </a>
                <a  class="btn btn-info btn-lg btn-rounded fs-3"
                    
                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                >
                    <i class="fas fa-plus"></i>    Créer un client
                </a>
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">LISTE DES DORDERAUX</h4>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        
                                        
                                        <th scope="col">ID</th>
                                        <th scope="col">BORDEREAU IR</th>
                                        <th scope="col">EMAIL CLIENT</th>
                                        <th scope="col">NOMBRE DE SOUCHE</th>
                                        <th scope="col">DESTINATAIRE</th>
                                        <th scope="col">STATUT</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        
                                        <td>
                                            <p class="mb-1 font-size-12">#AP1234</p>
                                            <h5 class="font-size-15 mb-0">David Wiley</h5>
                                        </td>
                                        <td>02 Nov, 2019</td>
                                        <td>$ 1,234</td>
                                        <td>1</td>
                                        
                                        
                                        <td>
                                            <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Confirm
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                                            <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->





        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel ">Ajouter un client</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fermer">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> <br> <br>
                    <div class="container">
                        <ul class="nav nav-tabs nav-justified nav-tabs-custom" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active fs-4" data-bs-toggle="tab" href="#clients" role="tab">
                                    
                                    <span class="d-none d-md-inline-block">ENTREPRISE </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  fs-4" data-bs-toggle="tab" href="#hover_clients" role="tab">
                                    <span class="d-none d-md-inline-block">PARTICULIER</span> 
                                </a>
                            </li>
                            
                            
                        </ul>
                    </div>
                


                    <!-- Tab panes -->
                    <div class="tab-content p-3">
                        <div class="tab-pane active" id="clients" role="tabpanel">
                            <form action="{{ route('add_clients') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="entreprise_libelle" required class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                                    <label for="floatingFirstnameInput">Nom de l'entréprise <span class="text-danger">*</span></label>
                                                </div>
                                    
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="dirigeant" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                                    <label for="floatingFirstnameInput">Responsable</label>
                                                </div>
                                    
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="sigle" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                                    <label for="floatingFirstnameInput">Sigle</label>
                                                </div>
                                    
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="boite_postal" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                                    <label for="floatingFirstnameInput">Boite Postale</label>
                                                </div>
                                    
                                            </div>
                                        </div>

                                        

                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="compte_contribuable" required class="form-control" id="floatingCommuneInput" placeholder="commune">
                                                    <label for="floatingCommuneInput">Compte Contribuable <span class="text-danger">*</span></label>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="registre_commerce" required class="form-control" id="floatingCommuneInput" placeholder="commune">
                                                    <label for="floatingCommuneInput">Regitre de commerce <span class="text-danger">*</span> </label>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="contact_client" required class="form-control" id="floatingContactInput" placeholder="contact">
                                                    <label for="floatingContactInput">Téléphone <span class="text-danger">*</span></label>
                                                </div>
                                            
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" name="type_entreprise" id="floatingSelectGrid" aria-label="Floating label select example">
                                                    <option selected>Choisissez types d'entreprise</option>
                                                    <option value="EIRL">Entreprise individuelle à responsabilité limitée (EIRL)</option>
                                                    <option value="EURL">Entreprise unipersonnelle à responsabilité limitée (EURL) </option>
                                                    <option value="SNC">Société en nom collectif (SNC)</option>
                                                    <option value="SCA">Société en commandite par actions (SCA) </option>
                                                    <option value="SA">Société anonyme (SA) </option>
                                                    <option value="SARL">Société à responsabilité limitée (SARL)</option>
                                                    <option value="SAS">Société par actions simplifiée (SAS)</option>
                                                </select>
                                                <label for="floatingSelectGrid">Types d'entreprise</label>
                                            </div>
                                        </div>

                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="ville" required class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                                    <label for="floatingFirstnameInput">Ville <span class="text-danger">*</span></label>
                                                </div>
                                    
                                            </div>

                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="commune_client" required class="form-control" id="floatingCommuneInput" placeholder="commune">
                                                    <label for="floatingCommuneInput">Commune <span class="text-danger">*</span></label>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="quartier_client" required class="form-control" id="floatingQuartier" placeholder="Quartier">
                                                    <label for="floatingQuartier">Quartier <span class="text-danger">*</span></label>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="rue_client" required class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                                    <label for="floatingFirstnameInput">Rue <span class="text-danger">*</span></label>
                                                </div>
                                    
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        

                                        <div class="col-4">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="immeuble" class="form-control" id="floatingImmeubleInput" placeholder="Immeuble">
                                                    <label for="floatingImmeubleInput">Immuble</label>
                                                </div>
                                            
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="etage" class="form-control" id="floatingEtage" placeholder="Etage">
                                                    <label for="floatingEtage">Etage</label>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="porte" class="form-control" id="floatingEtage" placeholder="Etage">
                                                    <label for="floatingEtage">Porte</label>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        
                                    </div>
                                    
                                    @if ($user_role == 'admin')
                                        <div class="row justify-content-md-center">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="facteur_1" class="form-control" id="floatingDirigeant" placeholder="Dirigeant">
                                                        <label for="floatingDirigeant">M1</label>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="facteur_2" class="form-control" id="floatingDirigeant" placeholder="Dirigeant">
                                                        <label for="floatingDirigeant">M2</label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    @endif
        
                                    
        
                                    
                                    <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                                    
                                    
        
                                    
                                    
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>



                        {{-- HOVER CLIENT --}}
                        
                        <div class="tab-pane" id="hover_clients" role="tabpanel">
                            <form action="{{ route('add_clients') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="entreprise_libelle" required class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                                    <label for="floatingFirstnameInput">Nom de l'entréprise <span class="text-danger">*</span></label>
                                                </div>
                                    
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="dirigeant" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                                    <label for="floatingFirstnameInput">Responsable</label>
                                                </div>
                                    
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="contacts" required class="form-control" id="floatingContactInput" placeholder="contact">
                                                    <label for="floatingContactInput">Téléphone <span class="text-danger">*</span></label>
                                                </div>
                                            
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" name="type_entreprise" id="floatingSelectGrid" aria-label="Floating label select example">
                                                    <option selected>Choisissez types d'entreprise</option>
                                                    <option value="EIRL">Entreprise individuelle à responsabilité limitée (EIRL)</option>
                                                    <option value="EURL">Entreprise unipersonnelle à responsabilité limitée (EURL) </option>
                                                    <option value="SNC">Société en nom collectif (SNC)</option>
                                                    <option value="SCA">Société en commandite par actions (SCA) </option>
                                                    <option value="SA">Société anonyme (SA) </option>
                                                    <option value="SARL">Société à responsabilité limitée (SARL)</option>
                                                    <option value="SAS">Société par actions simplifiée (SAS)</option>
                                                </select>
                                                <label for="floatingSelectGrid">Types d'entreprise</label>
                                            </div>
                                        </div>

                                        
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="ville" required class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                                    <label for="floatingFirstnameInput">Ville <span class="text-danger">*</span></label>
                                                </div>
                                    
                                            </div>

                                        </div>

                                        <div class="col-4">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="commune" required class="form-control" id="floatingCommuneInput" placeholder="commune">
                                                    <label for="floatingCommuneInput">Commune <span class="text-danger">*</span></label>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        

                                        <div class="col-4">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="rue" required class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                                    <label for="floatingFirstnameInput">Rue <span class="text-danger">*</span></label>
                                                </div>
                                    
                                            </div>
                                        </div>

                                        

                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="quartier" required class="form-control" id="floatingQuartier" placeholder="Quartier">
                                                    <label for="floatingQuartier">Quartier <span class="text-danger">*</span></label>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="immeuble" class="form-control" id="floatingImmeubleInput" placeholder="Immeuble">
                                                    <label for="floatingImmeubleInput">Immuble</label>
                                                </div>
                                            
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="etage" class="form-control" id="floatingEtage" placeholder="Etage">
                                                    <label for="floatingEtage">Etage</label>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="porte" class="form-control" id="floatingEtage" placeholder="Etage">
                                                    <label for="floatingEtage">Porte</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @if ($user_role == 'admin')
                                        <div class="row justify-content-md-center">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="facteur_1" class="form-control" id="floatingDirigeant" placeholder="Dirigeant">
                                                        <label for="floatingDirigeant">M1</label>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" name="facteur_2" class="form-control" id="floatingDirigeant" placeholder="Dirigeant">
                                                        <label for="floatingDirigeant">M2</label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    @endif
                                   
        
                                    
        
                                    
                                    <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                                    
                                    
        
                                    
                                    
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>



        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">SAISIR DE BORDEREAU DE TRANSMISSION</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            @csrf
                            <div class="row">
        
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="bordereau_ir" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                            <label for="floatingFirstnameInput">Bordereau IR</label>
                                        </div>
                            
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="email_client" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                            <label for="floatingFirstnameInput">Email Client <span class="text-danger">*</span></label>
                                        </div>
                            
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class=" form-floating mb-3">
                                        <select class="form-select" name="type_course" id="floatingSelectGrid2" aria-label="Floating label select example">
                                            <option selected>Choisissez le type de courses</option>
                                            <option value="">STANDARD</option>
                                            <option value="">URGENT</option>
                                            
                                        </select>
                                        <label for="floatingSelectGrid2">Type de courses</label>
                                    </div>
                                </div>
                            </div>


        
                            <div class="row">
        
                                <div class="col-xl-4">
                                    <div class=" form-floating mb-3">
                                        <input class="form-control" name="destinataire" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                        <datalist id="datalistOptions">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                        </datalist>
                                        <label for="exampleDataList">Destianataire</label>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="autre_destinataire" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                            <label for="floatingFirstnameInput">Autre Destinataire</label>
                                        </div>
                            
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="nature_entreprise" id="floatingSelectGrid3" aria-label="Floating label select example">
                                            <option selected>Choisissez la nature de l'entreprise</option>
                                            <option value="">Société</option>
                                            <option value="">Pharmacie</option>
                                            <option value="">Magasins </option>
                                            <option value="">Restaurant</option>
        
                                            <option value="">Bar </option>
                                            <option value="">Hôtel </option>
                                            <option value="">Marie</option>
                                            <option value="">Etablissement scolaire</option>
                                            <option value="">Etablissement universitaire</option>
                                            <option value="">Ambassade </option>
                                            <option value="">Administration</option>
                                            
                                        </select>
                                        <label for="floatingSelectGrid3">La nature de l'entreprise</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
        
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="contacts" class="form-control" id="floatingFirstnameContact" placeholder="Enter Your First Name">
                                            <label for="floatingFirstnameContact">Contact <span class="text-danger">*</span></label>
                                        </div>
                            
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="commune" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                            <label for="floatingFirstnameInput">Commune<span class="text-danger">*</span></label>
                                        </div>
                            
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="quartier" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                            <label for="floatingFirstnameInput">Quartier<span class="text-danger">*</span></label>
                                        </div>
                            
                                    </div>
                                </div>
                            </div>
        
                            <div class="row">
        
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="rue" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                            <label for="floatingFirstnameInput">Rue <span class="text-danger">*</span></label>
                                        </div>
                            
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="type_doc" id="floatingSelectGrid3" aria-label="Floating label select example">
                                                <option selected>Choisissez le type de doncument</option>
                                                <option value="">FACTURE</option>
                                                <option value="">AVOIR</option>
                                                <option value="">PRO-FORMAT </option>
                                                <option value="">BON DE COMMANDE</option>
            
                                                <option value="">BON DE LIVRAISON </option>
                                                <option value="">COURRIER ADMINISTRATIFS </option>
                                                <option value="">AUTRE DOCUMENTS</option>
                                                <option value="">COLIS</option>
                                                
                                                
                                            </select>
                                            <label for="floatingSelectGrid3">le type de doncument</label>
                                        </div>
                            
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input type="number" name="nombre_doc" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                            <label for="floatingFirstnameInput">Nombre document</label>
                                        </div>
                            
                                    </div>
                                </div>
                            </div>


                            <div class="row">
        
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="retour_souche" id="floatingSelectGrid3" aria-label="Floating label select example">
                                                <option selected>Choisissez retour souche</option>
                                                <option value="">OUI</option>
                                                <option value="">NON</option>
                                            </select>
                                            <label for="floatingSelectGrid3">Retour Souche</label>
                                        </div>
                            
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="nombre_souche" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                            <label for="floatingFirstnameInput">Nombre Souche</label>
                                        </div>
                            
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="facture_1" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                            <label for="floatingFirstnameInput">Facteur 1</label>
                                        </div>
                            
                                    </div>
                                </div>
                            </div>


                            <div class="row">
        
                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="facture_2" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                            <label for="floatingFirstnameInput">Facteur 2</label>
                                        </div>
                            
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="form-floating mb-3">

                                        <textarea  type="text" rows="3" name="contenue" class="form-control"></textarea>
                                        <label for="floatingFirstnameInput">REFERENCE FACTURE</label>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="mb-3">
                                        <div class="form-floating mb-3">
                                            <input  type="text" name="ref_bordereau" class="form-control" id="floatingRefBodInput" placeholder="Ref bordereau">
                                            <label for="floatingRefBodInput">NUMERO BORDEREAU</label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
@endsection
