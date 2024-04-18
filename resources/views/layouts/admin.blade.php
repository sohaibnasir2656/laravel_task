<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/themify-icons/css/themify-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify@0.4.0/dist/simple-notify.min.css" />

    @yield('style')

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        @include('admin._inc.sidebar')
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">

          @include('admin._inc.header')

        </header><!-- /header -->
        <!-- Header-->

      @yield('content')
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-notify@0.4.0/dist/simple-notify.min.js"></script>
    <script>
        $(document).ready(function() {
            $('ul.navbar-nav > li.active').addClass('show');
            $('ul.navbar-nav > li.active > ul.dropdown-menu').addClass('show');
        });
    </script>

     <!-- Alerts -->
     @if (session('success'))
     <script>
         new Notify({
             status: 'success',
             title: 'Alert!',
             text: '{{ session('success') }}',
             effect: 'fade',
             speed: 300,
             showIcon: true,
             showCloseButton: true,
             autoclose: true,
             autotimeout: 2000,
             gap: 20,
             distance: 20,
             type: 1,
             position: 'right top'
         })
     </script>
 @endif
 @yield('script')

</body>

</html>
