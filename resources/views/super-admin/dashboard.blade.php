<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="{{ asset('fa/css/all.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!-- Optional JavaScript -->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    </head>
    <body class="font-sans antialiased">

            {{-- @livewire('navigation-menu') --}}
            <div class="d-flex" id="wrapper">
                <div class="border-end bg-white" id="sidebar-wrapper">
                    <img class="sidebar-heading img-fluid" src="{{ asset('img/logo.png') }}" style="height: 200px; width: 250px;">
                    <div class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action list-group-item-primary p-3" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            <i class="fas fa-th-large mr-2"></i>
                            Dashboard
                        </a>
                        <a class="list-group-item list-group-item-action list-group-item-primary p-3" href="{{ route('admin-user') }}" :active="request()->routeIs('admin-user')">
                            <i class="fas fa-th-large mr-2"></i>
                            User
                        </a>
                    </div>
                </div>
                <div id="page-content-wrapper" class="bg-light">
                    <!-- Top navigation-->
                    <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
                        <div class="container-fluid">
                            <button class="btn " id="sidebarToggle"><i class="fas fa-bars mr-2"></i>Menu</button>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- Page content-->
                    <div class="container-fluid mt-3">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (session('messages'))
<div class="alert alert-success alert-dismissible">
    {{ session('messages') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
<div class="row mb-4">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="card" style="border-top: 4px solid; border-top-color : blue;">
                            <div class="card-body">
                                <div class="judul">
                                    <span><b>Total User</b> | </span>
                                </div>
                                <div class="isi">
                                    <span>Rp</span>
                                    <span style="font-size: 24pt">
                                        <b>
                                           
                                        </b>
                                    </span>
                                    <br>
                                    <span class="text-muted"><small>vs</small></span>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="border-top: 4px solid; border-top-color : orange;">
                            <div class="card-body">
                                <div class="judul">
                                    <span><b>Today</b> | </span>
                                </div>
                                <div class="isi">
                                    <span>Rp</span>
                                    <span style="font-size: 24pt">
                                        <b>
                                            
                                        </b>
                                    </span>
                                    <br>
                                    <span class="text-muted"><small>vs </small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="border-top: 4px solid; border-top-color : rgb(0, 174, 255);">
                            <div class="card-body">
                                <div class="judul">
                                    <span><b>Best Month</b></span>
                                </div>
                                <div class="isi">
                                    <span>Rp</span>
                                    <span style="font-size: 28pt"><b>1.000</b></span><br>
                                    <span><b></b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="border-top: 4px solid; border-top-color : rgb(0, 168, 160);">
                            <div class="card-body">
                                <div class="judul">
                                    <span><b>Best Day</b></span>
                                </div>
                                <div class="isi">
                                    <span>Rp</span>
                                    <span style="font-size: 28pt"><b>1.000</b></span><br>
                                    <span><b></b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <canvas id="chart1" height="100px" style="height: 100px"></canvas>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <canvas id="chart2" height="100px"></canvas>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    </div>
                    <!-- Page content-->
                </div>
            </div>
        

        @stack('modals')

        @livewireScripts
    </body>
</html>
