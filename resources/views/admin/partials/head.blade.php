<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <title> B E M &nbsp; V O K A S I </title>
  <link rel="icon" href="{{ asset('images/LOGO BEM.png')}}" sizes="96×96" type="image/png">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ asset('js/modules/bootstrap-daterangepicker/daterangepicker.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css')}}">

  {{-- Kalender --}}
  <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/main.css')}}">

  <style>
    /*General*/
    p,
    hr {
      margin: 0px;
    }

    .of-cover {
      object-fit: cover;
    }

    .of-contain {
      object-fit: contain;
    }

    .flip-h {
      transform: scale(-1, 1)
    }

    .flip-v {
      transform: scale(1, -1)
    }

    /*Navbar*/
    .navbar .nav-link.nav-link-user img {
      width: 30px;
      height: 30px;
      object-fit: cover
    }

    /*Table*/
    #myTable {
      width: -webkit-fill-available !important;
    }

    .btn-table {
      padding: 2px !important;
      width: 24px;
      line-height: normal;
    }

    .btn-table i {
      font-size: 16px
    }

    .btn-table .fa-pen {
      font-size: 12px !important;
      height: 16px
    }

    .thumbnail-table {
      height: 36px;
      width: 64px;
      object-fit: cover;
    }

    /*Modal*/
    .modal-header {
      padding: 25px;
    }

    @media (max-width: 650px) {
      .fc-toolbar-chunk {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
      }

      .fc-header-toolbar {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
        text-align: center !important;
      }
     }
  </style>

  @stack('style')
</head>