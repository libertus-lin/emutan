<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Emutan,">
  <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
  <title>Emutan | @yield('title')</title>

<body>

  @include('layouts.inc.navbar')

  @include('layouts.inc.sidebar')

  {{-- Content --}}
  @yield('content')
  {{-- EndContent --}}

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('frontend/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('frontend/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
