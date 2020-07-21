<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/back/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/back/assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
    />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Markazi Text font include just for persian demo purpose, don't include it in your project -->
    <link href="https://fonts.googleapis.com/css?family=Cairo&amp;subset=arabic" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('/back/assets/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
    <link href="{{ asset('/back/assets/css/material-dashboard-rtl.css?v=1.1') }}" rel="stylesheet" />
{{--    <link href="{{ asset('/back/assets/css/bootstrap.min.css') }}" rel="stylesheet" />--}}


    <!-- bootstrap-selectpicker -->
    <link rel="stylesheet" href="{{ asset('/back/assets/css/bootstrap-select.min.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('/back/assets/demo/demo.css') }}" rel="stylesheet" />

    <!-- Style Just for persian demo purpose, don't include it in your project -->
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4 {
            font-family: "Cairo";
        }
      .bootstrap-select .btn {
        background: initial !important;
        color: initial !important;
      }
      .bootstrap-select .filter-option {
        text-align: right !important;
      }
    </style>
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('/back/assets/img/sidebar-1.jpg') }}">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a href="{{ route('home') }}" class="simple-text logo-normal">
مدیریت وبلاگ من
            
</a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                @auth
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.index') }}">
                        <i class="material-icons">dashboard</i>
                        <p>داشبورد</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('admin.articles') }}">
                        <i class="material-icons">dashboard</i>
                        <p>فهرست مطالب</p>
                    </a>
                </li>
                @if(Auth::user()->role<=1)

                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('admin.categories') }}">
                        <i class="material-icons">dashboard</i>
                        <p>دسته‌بندی‌ها</p>
                    </a>
                </li>
                @endif


              
                    @endauth
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="{{ route('admin.index') }}">داشبورد</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">

                    <ul class="navbar-nav">
                       
                        
                        
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">خروج</button>
                            </form>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- End Navbar -->


        @yield('content')

        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="#">
                                نسیم کریمی
                            </a>
                        </li>

                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, ساخته شده با
                    <i class="material-icons">favorite</i> توسط
                    <a href="#" target="_blank">نسیم کریمی</a>
                </div>
            </div>
        </footer>
    </div>
</div>



<!--   Core JS Files   -->
<script src="{{ asset('/back/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/back/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/back/assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/back/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{ asset('/back/assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('/back/assets/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('/back/assets/js/material-dashboard.min.js?v=2.1.0') }}" type="text/javascript"></script>
<script src="{{ asset('back/assets/js/sweetalert.js') }}"></script>
    <!-- bootstrap-selectpicker -->
    <script src="{{ asset('/back/assets/js/plugins/bootstrap-selectpicker.js') }}"></script>


        <!-- Make sure the path to CKEditor is correct. -->
        <script src="{{ asset('/back/assets/ckeditor/ckeditor.js') }}"></script>


        <script>
                var options = {
                  filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                  filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                  filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                  filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
                  contentsLangDirection: 'rtl'
                };
              </script>
              


            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1', options);
            </script>



 <!--script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script-->



<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('/back/assets/demo/demo.js') }}"></script>





<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
    });
</script>
</body>

</html>





