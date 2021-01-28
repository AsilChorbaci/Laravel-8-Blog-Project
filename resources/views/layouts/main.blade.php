<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Blog</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" type="text/css">

</head>

<body>
@include('main._header')
@include('main._hero')

<section class="categories spad">
@include('main._category')
</section>

<section class="categories spad">
    <div class="container">
        <div class="row">
            @include('main._posts')
            @include('main._sidebar')
        </div>
    </div>
</section>



@include('main._footer')
</body>
</html>

