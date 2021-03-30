<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.head')

</head>

<body class="">
  <div class="wrapper ">

    @include('includes.sidebar')

    <div class="main-panel">
      <!-- Navbar -->

      @include('includes.navbar')

      <!-- End Navbar -->

      @yield('content')

      @include('includes.footer')

    </div>

  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('bootstrap/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('bootstrap/js/core/popper.min.js')}}"></script>
  <script src="{{asset('bootstrap/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('bootstrap/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('bootstrap/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('bootstrap/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('bootstrap/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('bootstrap/demo/demo.js')}}"></script>
  <script src="{{asset('bootstrap/registerlayout/stepbystep.js')}}"></script>

  <script src="{{asset('bootstrap/registerlayout/step.js')}}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
