@extends('layouts.master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-md navbar-light">

              <!-- Collapse button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav11"
                aria-controls="basicExampleNav11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="waves-effect" href="#!">Home</a></li>
                <li class="breadcrumb-item"><a class="waves-effect" href="#!">Templates</a></li>
                <li class="breadcrumb-item active"><a class="waves-effect" href="#!">E-commerce</a></li>
              </ol>
              <!-- Breadcrumbs -->

              <!-- Links -->
              <div class="collapse navbar-collapse" id="basicExampleNav11">

                <!-- Right -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a href="#!" class="nav-link navbar-link-2 waves-effect">
                      <span class="badge badge-pill red">1</span>
                      <i class="fas fa-shopping-cart pl-0"></i>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="true">
                      <i class="united kingdom flag m-0"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#!">Action</a>
                      <a class="dropdown-item" href="#!">Another action</a>
                      <a class="dropdown-item" href="#!">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="#!" class="nav-link waves-effect">
                      Shop
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#!" class="nav-link waves-effect">
                      Contact
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#!" class="nav-link waves-effect">
                      Sign in
                    </a>
                  </li>
                  <li class="nav-item pl-2 mb-2 mb-md-0">
                    <a href="#!" type="button"
                      class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign up</a>
                  </li>
                </ul>

              </div>
              <!-- Links -->

            </nav>
            <!-- Navbar -->
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->

      <div class="card card-solid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Motor </h3>
          </div>
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            
            @foreach ($motors as $motor)
            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header mb-2">
                    </div>
                    <!-- card-body -->
                    <div class="card-body pt-0">
                      <div class="row">
                        <!-- col -->
                        <div class="col-5 text-center">
                          <img src="{{('gambar/User1.jpg')}}" alt="" class="img-circle img-fluid">
                        </div>
                        
                        <div class="col-7">
                          <h2 class="lead"><b> {{$motor->nama}}</b></h2>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="mt-4">
                        <div class="btn btn-outline-info" >
                          <a href="{{route('motor.show', $motor->id)}}" style="text-decoration:none">Rental</a>  
                        </div>
                      <div class="btn btn-secondary">
                        <a href="#" style="text-decoration:none">Tambah Pesanan </a>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                @endforeach
                
              </div>
            </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection