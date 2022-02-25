@extends('layouts.bordereau')
@section('title', 'Tableau de bord')
@section('breadcrumb-active', 'Clients')
@section('main')

    <!-- end row -->


        
    @if($user_role = Session::get('user_role')) @endif
    <div class="row justify-content-md-center mb-4">
        <div class="col-xl-5">
            
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
                    <h4 class="card-title mb-4">LISTE DES CLIENTS</h4>
                    <div class="table-rep-plugin">
                        <div class="table-responsive " data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-centered table-nowrap mb-0">
                                <thead>
                                    
                                    <tr>
                                        
                                        
                                        
                                        <th data-priority="1">Client</th>
                                        <th data-priority="2">auteur</th>

                                        <th data-priority="3">Entreprise</th>
                                        <th data-priority="4">Type entreprise</th>
                                        <th data-priority="5">Responsable</th>
                                        <th data-priority="6">Compte contribuable</th>
                                        <th data-priority="7">Registre commerce</th>
                                        <th data-priority="8">Boite Postale</th>
                                        <th data-priority="9">Ville</th>
                                        <th data-priority="10">Sigle</th>                                        
                                        <th data-priority="11">Téléphone</th>
                                        <th data-priority="12">Commune</th>
                                        <th data-priority="13">Quartier</th>
                                        
                                        <th data-priority="14">Rue</th>
                                        
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($listes_clients) != 0)
                                        @foreach ($listes_clients as $items )
                                            <tr>
                                                
                                                <td>
                                                    {{ $items->clients_id }}
                                                </td>
                                                <td>
                                                    {{ $items->auteur }}
                                                </td>
                                                
                                                <td>
                                                    {{ $items->entreprise_libelle }}
                                                </td>
                                                
                                                <td>
                                                    {{ $items->type_entreprise }}
                                                </td>

                                                <td>
                                                    {{ $items->dirigeant }}
                                                </td>
                                                <td>
                                                    {{ $items->compte_contribuable }}
                                                </td>
                                                <td>
                                                    {{ $items->registre_commerce }}
                                                </td>

                                                <td>
                                                    {{ $items->boite_postal }}
                                                </td>
                                                <td>
                                                    {{ $items->ville }}
                                                </td>
                                                <td>
                                                    {{ $items->sigle }}
                                                </td>
                                                
                                                
                                            
                                                <td>
                                                    {{ $items->contacts_clients }}
                                                </td>
                                                <td>
                                                    {{ $items->commune_clients }}
                                                </td>
                                                <td>
                                                    {{ $items->quartier_clients }}
                                                </td>
                                                
                                                <td>
                                                    {{ $items->rue_clients }}
                                                </td>
                                                
                                                <td>
                                                    {{ $items->dirigeant }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('edit_clients', $items->id) }}" class="btn btn-outline-success btn-sm">Editer</a>

                                                    <form action="{{ route('destroy_clients', $items->id) }}">
                                                        <button type="submit" class="btn btn-outline-danger btn-sm">Supprimer</button>
                                                    </form>
                                                        
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <h1>AUCUNE DONNEE</h1>
                                        </tr>
                                    @endif
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>
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



        
        
@endsection
