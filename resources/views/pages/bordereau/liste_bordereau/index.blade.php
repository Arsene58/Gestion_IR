@extends('layouts.bordereau')
@section('title', 'Tableau de bord')
@section('breadcrumb-active', 'Tableau de bord')
@section('main')

    <!-- end row -->
    <div class="row justify-content-md-center mb-4">
        <div class="col-xl-5">
            <a  data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl"  class="btn btn-warning btn-lg btn-rounded fs-3">
                <i class="fas fa-plus"></i>    Saisir un bordereau
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
