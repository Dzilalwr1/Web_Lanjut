{{-- Scripts are bundled in resources/js/backend.js --}}
<script src="{{ asset('build/assets/backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('build/assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('build/assets/backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('build/assets/backend/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('build/assets/backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('build/assets/backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function () {
        if ($("#dataTable").length) {
            $("#dataTable").DataTable();
        }
    });
</script>