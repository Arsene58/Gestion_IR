@extends('layouts.bordereau')
@section('title', 'Tableau de bord')
@section('breadcrumb-active', 'Vérification')
@section('main')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">LISTE DES VERIFICATIONS</h4>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    
                                    
                                    <th scope="col">ID</th>
                                    <th scope="col">DATE</th>
                                    <th scope="col">NUMERO BORDEREAU</th>
                                    <th scope="col">DESTINATAIRE</th>
                                    
                                    <th scope="col">CONTACT</th>
                                    <th scope="col">COMMUNE</th>


                                    <th scope="col">QUARTIER</th>
                                    <th scope="col">RUE</th>

                                    <th scope="col">CONTACT</th>
                                    <th scope="col">COMMUNE</th>
                                    <th scope="col">VALIDATION</th>

                                    <th scope="col">MOTIF REFUS</th>
                                    <th scope="col">DATE DEPOT</th>
                                    
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


                                    <td>
                                        2
                                    </td>
                                    
                                    <td>02 Nov, 2019</td>

                                    <td>$ 1,234</td>

                                    <td>1</td>
                                    
                                    
                                    <td>
                                        <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> reçu
                                    </td>
                                    

                                    <td>
                                        2
                                    </td>
                                    
                                    <td>02 Nov, 2019</td>

                                    <td>$ 1,234</td>


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
