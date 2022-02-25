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
                <i class="fas fa-plus"></i>    Ajouter une entréprise
            </a>
            
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">LISTE DES ENTREPRISES</h4>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    
                                    
                                    <th scope="col"># ID</th>
                                    <th scope="col">ENTREPRISE</th>
                                    <th scope="col">NATURE</th>
                                    <th scope="col">TYPE ENTREPRISE</th>
                                    
                                    <th scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($get_entreprise) != 0)
                                    @foreach ($get_entreprise as $items )
                                        <tr>
                                            <td>
                                                {{ $items->id }}
                                            </td>
                                            <td>
                                                {{ $items->libelle }}
                                            </td>
                                            
                                            <td>
                                                {{ $items->nature }}
                                            </td>
                                            
                                            <td>
                                                {{ $items->type_entreprise }}
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
                                    <tr >
                                        <td class="text-center">
                                            <h6>AUCUNE DONNEE</h6>
                                        </td>
                                        
                                    </tr>
                                @endif
                                
                                
                                
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
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title text-light" id="exampleModalLabel ">Ajouter un client</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fermer">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('add_entreprise') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="text" name="libelle" class="form-control" id="floatingFirstnameInput" placeholder="Enter Your First Name">
                                <label for="floatingFirstnameInput">Nom de l'entréprise</label>
                            </div>
                
                        </div>


                        

                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="text" name="nature" class="form-control" id="floatingContactInput" placeholder="contact">
                                <label for="floatingContactInput">Nature de l'entréprise</label>
                            </div>
                        
                        </div>
                        <input type="hidden" name="username" value="">
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                                <input type="text" name="type_entreprise" class="form-control" id="floatingCommuneInput" placeholder="commune">
                                <label for="floatingCommuneInput">Type de l'entréprise'</label>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



        
        
@endsection
