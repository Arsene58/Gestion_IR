@extends('layouts.bordereau')
@section('title', 'Tableau de bord')
@section('breadcrumb-active', 'Clients')
@section('main')

    <!-- end row -->
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
                <h4 class="card-title mb-4">LISTE DES CLIENTS</h4>
                <div class="card-body">
                    

                    <form action="" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                    <label for="floatingFirstnameInput">Nom de l'entréprise</label>
                                </div>
                    
                            </div>
    
    
                            <div class="form-floating mb-3">
                                <select class="form-select" name="role" id="floatingSelectGrid" aria-label="Floating label select example">
                                    <option selected>Choisissez types d'entreprise</option>
                                    <option value="">Entreprise individuelle (EI)</option>
                                    <option value="">Entreprise individuelle à responsabilité limitée (EIRL)</option>
                                    <option value="">Entreprise unipersonnelle à responsabilité limitée (EURL) </option>
                                    <option value="">Société en nom collectif (SNC)</option>
    
                                    <option value="">Société en commandite par actions (SCA) </option>
                                    <option value="">Société anonyme (SA) </option>
                                    <option value="">Société à responsabilité limitée (SARL)</option>
                                    <option value="">Société par actions simplifiée (SAS)</option>
                                </select>
                                <label for="floatingSelectGrid">Types d'entreprise</label>
                            </div>
    
                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" name="contacts" class="form-control" id="floatingContactInput" placeholder="contact">
                                    <label for="floatingContactInput">Contact</label>
                                </div>
                            
                            </div>
                            <input type="hidden" name="username" value="">
                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" name="commune" class="form-control" id="floatingCommuneInput" placeholder="commune">
                                    <label for="floatingCommuneInput">Commune</label>
                                </div>
                                
                            </div>
                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" name="quartier" class="form-control" id="floatingQuartier" placeholder="Quartier">
                                    <label for="floatingQuartier">Quartier</label>
                                </div>
                                
                            </div>
    
                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" name="rue" class="form-control" id="floatingRue" placeholder="Rue">
                                    <label for="floatingRue">Rue</label>
                                </div>
                                
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-floating mb-3">
                                    <input type="text" name="dirigeant" class="form-control" id="floatingDirigeant" placeholder="Dirigeant">
                                    <label for="floatingDirigeant">Dirigeant</label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->



        
        
@endsection
