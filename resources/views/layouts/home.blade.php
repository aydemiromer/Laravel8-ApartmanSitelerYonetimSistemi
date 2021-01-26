<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('assets')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('assets')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">






    <!-- =======================================================
      Theme Name: EstateAgency
      Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
    @yield('css')
    @yield('headerjs')
</head>

<body>

@include('home._navbar')

@section('content')

@show
@include('home._footer')
@yield('footerjs')
</body>
</html>
