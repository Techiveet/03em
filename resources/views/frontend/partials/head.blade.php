<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('frontend/images/favicon.html') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.html') }}" />

    <!-- PAGE TITLE HERE -->
    <title>O3EM - @yield('title')</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/fontawesome/css/font-awesome.min.css')}}" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/flaticon.min.css')}}">
    <!-- ANIMATE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.min.css')}}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap-select.min.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/magnific-popup.min.css')}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/loader.min.css')}}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{asset('frontend/css/skin/skin-1.css')}}">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom.css')}}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/switcher.css')}}">


    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('frontend/plugins/revolution/revolution/css/navigation.css')}}">

    <!-- GOOGLE FONTS -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">

    @stack('styles')
    <style>
        .marquee {
            white-space: nowrap;
            overflow: hidden;
            position: relative;
        }

        .TickerNews {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            width: 100%;
            line-height: 10px;
        }

        .ti_wrapper {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .ti_slide {
            display: inline-block;
            white-space: nowrap;
        }

        .ti_content {
            display: flex;
            align-items: center;
            transition: transform 0.1s linear;
        }

        .ti_news {
            display: inline-flex;
            align-items: center;
            margin-right: 40px;
            color: #fff;
            white-space: nowrap;
        }

        .ti_news img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .text-green {
            color: #4CAF50;
            /* Positive percentage color */
        }

        .text-danger {
            color: #F44336;
            /* Negative percentage color */
        }



        /* Pagination styles */
        .pagination-button {
            padding: 10px 15px;
            margin: 5px;
            border: 1px solid #ddd;
            background-color: #f8f9fa;
            color: #333;
            cursor: pointer;
            border-radius: 5px;
        }

        .pagination-button.active {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        .pagination-button:hover {
            background-color: #0056b3;
            color: #fff;
        }
    </style>
</head>
