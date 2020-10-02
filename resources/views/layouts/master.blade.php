<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>        
        <link href="dashboard.css" rel="stylesheet">
          <!-- Select2 -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{asset('css/icheck-bootstrap.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">        
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Ionicons -->
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link href="https://getbootstrap.com/docs/4.5/examples/dashboard/dashboard.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
                <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="javascript:;">Rental Motor</a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
    
            <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('home')}}">
                                    <i class="fas fa-tachometer-alt"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('motor.index') }}">
                                    <i class="fas fa-cogs"></i> Data Motor
                                </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('penyewa.index') }}">
                                    <i class="ion ion-pie-graph"></i>  Data Penyewa
                                </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('perbaikan.index')}}">
                                    <i class="fas fa-sliders-h"></i> Data Perbaikan  
                                </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{route('layanan.index')}}">
                                    <i class="fas fa-users-cog"></i> Data Service 
                                </a>
                            </li>
                        </ul>
                    </div>
                    </nav>
    
                    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                        <canvas class="my-2 w-100" id="myChart" width="0" height="0"></canvas>
                            @yield('content')
                    </main>
                </div>
            </div>
        </div>
      
     <!-- Bootstrap -->   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>