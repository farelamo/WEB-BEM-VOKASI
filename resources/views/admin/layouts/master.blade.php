<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
@include('admin/partials/head')
<!-- END HEAD -->

<body>
  <div id="app">
    <div class="main-wrapper">

      <!-- NAVBAR -->
      @include('admin/partials/navbar')
      <!-- END NAVBAR-->

      <!-- SIDEBAR -->
      @include('admin/partials/sidebar')
      <!-- END SIDEBAR -->
      
      <!-- Main Content -->
      <div class="main-content">
        @yield('isi')
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

  @yield('modal')
  
  @include('admin/partials/script')

</body>

</html>