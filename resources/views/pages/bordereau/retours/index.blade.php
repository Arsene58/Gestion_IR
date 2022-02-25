@extends('layouts.bordereau')
@section('title', 'Tableau de bord')
@section('breadcrumb-active', 'Retour')
@section('main')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">LISTE DES RETOURS</h4>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    
                                    
                                    <th scope="col">ID</th>
                                    <th scope="col">DATE DE RETOUR</th>
                                    <th scope="col">DESTINATAIRE</th>
                                    <th scope="col">NUMERO BORDERO</th>
                                    <th scope="col">VALIDATION</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    
                                    <td>02 Nov, 2019</td>

                                    <td>$ 1,234</td>

                                    <td>1</td>
                                    
                                    
                                    <td>
                                        <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> reçu
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


        
        
@endsection
