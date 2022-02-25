

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © IVOIRRAPID. v 1.0
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Par <i class="mdi mdi-heart text-danger"></i> Brou  Elie
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }} "></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }} "></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }} "></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }} "></script>

<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }} "></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }} "></script>



<script src="{{ asset('assets/js/pages/dashboard.init.js') }} "></script>
<!-- Datatable init js -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }} "></script>

<script src="{{ asset('assets/js/app.js') }} "></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@if($errro_success = Session::get('success'))

<script>
    swal({
        title: "Alerte !",
        text: "{{  __($errro_success) }}",
        icon: "success",
        button: "Fermer",
    });

</script>

@endif

@if($errro_danger = Session::get('errors'))

<script>
    swal({
        title: "Alerte !",
        text: "{{  __($errro_danger) }}",
        icon: "error",
        button: "Fermer",
    });
</script>


@endif
