<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admintemplate') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('admintemplate') }}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('admintemplate') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('admintemplate') }}/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{ asset('admintemplate') }}/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ asset('admintemplate') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admintemplate') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{ asset('admintemplate') }}/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admintemplate') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admintemplate') }}/images/favicon.png" />
</head>
<body>
   
    @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.auth.authTemplate')
        @endauth
        @guest()
            @include('layouts.auth.guestTemplate')
        @endguest
              
  <!-- plugins:js -->
  <script src="{{ asset('admintemplate') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('admintemplate') }}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ asset('admintemplate') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="{{ asset('admintemplate') }}/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('admintemplate') }}/js/off-canvas.js"></script>
  <script src="{{ asset('admintemplate') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('admintemplate') }}/js/template.js"></script>
  <script src="{{ asset('admintemplate') }}/js/settings.js"></script>
  <script src="{{ asset('admintemplate') }}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admintemplate') }}/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="{{ asset('admintemplate') }}/js/dashboard.js"></script>
  <script src="{{ asset('admintemplate') }}/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  
</body>
</html>
