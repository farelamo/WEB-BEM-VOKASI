<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css')}}">
  <style>
    /*General*/
    p,hr {margin: 0px;}
    .of-cover {object-fit: cover;}
    .of-contain {object-fit: contain;}
    .flip-h {transform: scale(-1, 1)}
    .flip-v {transform: scale(1, -1)}

    /*Navbar*/
    .navbar .nav-link.nav-link-user img {width: 30px; height: 30px; object-fit: cover}

    /*Table*/
    .btn-table {padding: 2px !important; width: 24px; line-height: normal;}
    .btn-table i {font-size: 16px}
    .btn-table .fa-pen {font-size: 12px !important; height: 16px}
    .thumbnail-table {height: 36px; width: 64px; object-fit: cover;}

/*Modal*/
.modal-header {padding: 25px;}
  </style>

  @stack('style')
  @livewireStyles
  @livewireScripts
</head>