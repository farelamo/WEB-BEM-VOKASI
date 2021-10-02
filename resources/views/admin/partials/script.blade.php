<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

<script src="{{ asset ('admin/assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{ asset('admin/assets/vendors/datatables.net-bs4/jquery.dataTables.js')}}"></script>
<script src="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('admin/assets/js/scripts.js')}}"></script>
<script src="{{ asset('admin/assets/js/custom.js')}}"></script>
<script src="{{ asset('js/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/fullcalendar/main.js')}}"></script>
<script src="{{ asset('js/timeline.js')}}"></script>

<!-- Template JS File -->

<!-- Page Specific JS File -->
<script>
$(document).ready(function () {
  $('#myTable').DataTable({
    "aLengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All Pages"]],
    "pageLength": 5
  });
});
</script>

@stack('scripts')