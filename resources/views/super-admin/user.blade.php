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
<body>
    
{{-- @livewire('navigation-menu') --}}
            <div class="d-flex" id="wrapper">
                <div class="border-end bg-white" id="sidebar-wrapper">
                    <img class="sidebar-heading img-fluid" src="{{ asset('img/logo.png') }}" style="height: 200px; width: 250px;">
                    <div class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action list-group-item-primary p-3" href="{{ route('admin-dashboard') }}" :active="request()->routeIs('admin-dashboard')">
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
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data User</li>
    </ol>
</nav>
<div class="row mb-4">
    <div class="col">
        <div class="card shadow">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <h1>Data User</h1>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-plus"></i>
                            Tambah User
                        </button>
                    </div>
                </div>
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="{{ route('member-post') }}">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="inputEmail3">Nama</label>
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3">No Handphone</label>
                                        <input type="text" class="form-control" name="nohp">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3">Alamat</label>
                                        <textarea class="form-control" name="alamat"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table id="example" class="table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 5%;">No</th>
                                    <th scope="col">ID Member</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">No Handphone</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col" style="width: 5%;">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1
                                @endphp
                                @isset($member)
                                @foreach ($member as $item)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('member-edit', $item->id) }}"><i class="text-muted fas fa-pencil-alt ml-2 mr-3"></i></a>
                                        <button>
                                            <form method="POST" action="{{ route('member-delete', $item->id) }}">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit"><i class="fas fa-trash text-muted"></i></button>
                                            </form>
                                        </button>
                                    </td>
                                </tr>                                
                                @endforeach
                                @endisset
                            </tbody>
                        </table>
                        <script>
                            $(document).ready(function() {
                                $('#example').DataTable();
                            } );
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>