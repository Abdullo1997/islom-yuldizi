<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/islamic.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/owlcarousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/owlcarousel/assets/owl.theme.default.css') }}">
</head>
<body>
    
    @include('front_include.nav')
    @yield('content')
    @include('front_include.footer')

    
<script type="text/javascript" src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/owlcarousel/owl.carousel.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>