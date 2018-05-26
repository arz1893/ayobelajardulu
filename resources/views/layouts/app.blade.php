<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ayobelajardulu.com</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Other Styles -->
    @stack('styles')
</head>
<body >
    <div id="page-top">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <!-- Jquery -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <!-- Other Scripts -->
    @stack('scripts')

</body>
</html>
