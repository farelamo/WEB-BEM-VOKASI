<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
@include('livewire/admin/partials/head')
<!-- END HEAD -->

<body>
  <div id="app">
    <div class="main-wrapper">

      <!-- NAVBAR -->
      @include('livewire/admin/partials/navbar')
      <!-- END NAVBAR-->

      <!-- SIDEBAR -->
      @include('livewire/admin/partials/sidebar')
      <!-- END SIDEBAR -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            @yield('judul')
          </div>

          <div class="section-body">
            @yield('isi')
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Develop by <a
            href="https://www.instagram.com/irestech.ub/">IRESTECH UB</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

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
  <script src="{{ asset('admin/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{ asset('admin/assets/js/scripts.js')}}"></script>
  <script src="{{ asset('admin/assets/js/custom.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('admin/assets/js/scripts.js')}}"></script>
  <script src="{{ asset('admin/assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable({
        "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All Pages"]],
        "pageLength": 25
      });
    });
  </script>
  @stack('script')

</body>

</html>