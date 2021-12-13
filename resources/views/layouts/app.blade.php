<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="//code.jquery.com/jquery.js"></script>


    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition layout-fixed control-sidebar-slide-open layout-navbar-fixed">
    <div class="wrapper">
        <!-- Main Header -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-dvbi">
            <!-- Left navbar links -->
            <ul class="navbar-nav dvbi-menu-toggle">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><span
                            class="fi fi-rr-menu-burger"></span></a>
                </li>
            </ul>
            <div class="dvbi-page-title">
                <h1 class="page-title">Data visualization & Business intelligence Platform</h1>
            </div>
            <ul class="navbar-nav ml-auto dvbi-header-menu">
                <li class="nav-item dropdown">
                    <a class="nav-link icon-link" href="#"><i class="fi fi-rr-layout-fluid"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link icon-link" href="#"><i class="fi fi-rr-interrogation"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link icon-link" data-widget="fullscreen" role="button" href="#"><i
                            class="fi fi-rr-expand"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link icon-link" href="#"><i class="fi fi-rr-settings"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link icon-link" data-toggle="dropdown" href="#"><i class="fi fi-rr-bell"></i><span
                            class="badge badge-danger navbar-badge">15</span></a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li><a href="#" class="dropdown-item"><i class="fas fa-file mr-2"></i> 3 new reports<span
                                    class="float-right text-muted text-sm">2 days</span></a></li>
                        <li><a href="#" class="dropdown-item"><i class="fas fa-file mr-2"></i> 3 new reports<span
                                    class="float-right text-muted text-sm">2 days</span></a></li>
                        <li><a href="#" class="dropdown-item"><i class="fas fa-file mr-2"></i> 3 new reports<span
                                    class="float-right text-muted text-sm">2 days</span></a></li>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#"><span class="user-info"><span
                                class="name">Name</span> <span
                                class="icon fi fi-rr-angle-small-down"></span></span></a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li><a href="#" class="dropdown-item"><i class="fas fa-file mr-2"></i> 3 new reports<span
                                    class="float-right text-muted text-sm">2 days</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper dvbi-wrapper">
            <section class="content">
                <div class="container-fluid mb-4">
                    <div class="row">
                        <div class="col">
                            <div class="dvbi-page-title">
                                <h1 class="page-title">FAQ Module</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard v1</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </section>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}" defer></script>

    @yield('third_party_scripts')

    @stack('page_scripts')

    @if (session('status'))
        <script>
            toastr.success("{{ Session::get('status') }}");
        </script>
    @endif
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
</body>

</html>
