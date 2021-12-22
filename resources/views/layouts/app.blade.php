<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Goddefi.net</title>
    <link rel="icon" href="/images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Goddefi.net" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="/css/coloring.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        @include('includes.header')
        
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            @yield('content')
            
        </div>
        <!-- content close -->
        @yield('after-content')

        <a href="#" id="back-to-top"></a>
        
        @include('includes.footer')
    </div>


    
    <!-- Javascript Files
    ================================================== -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.isotope.min.js"></script>
    <script src="/js/easing.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/validation.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/enquire.min.js"></script>
    <script src="/js/jquery.plugin.js"></script>
    <script src="/js/jquery.countTo.js"></script>
    <script src="/js/jquery.countdown.js"></script>
    <script src="/js/jquery.lazy.min.js"></script>
    <script src="/js/jquery.lazy.plugins.min.js"></script>
    <script src="/js/designesia.js"></script>
    <script src="/js/particles.js"></script>
    <script src="/js/particles-settings-2.js"></script>


</body>

</html>