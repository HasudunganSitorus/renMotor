@extends('layouts.master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Motor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contacts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            
            @foreach ($kondisis as $kondisi)
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
                          <h2 class="lead"><b> {{$kondisi->listrik}}</b></h2>
                          <h2 class="lead"><b> {{$kondisi->kemampuan}}</b></h2>
                          <p class="text-muted text-sm">
                            <p> Motor: 
                                @foreach ($kondisi->motor as $motor)
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                  <li class="small">Nama Motor: {{$motor->nama}}</li>
                                </ul>
                                @endforeach 
                              </p>
                            </p> 
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="text-right">
                      <a href="{{route('motor.show', $motor->id)}}" class="btn btn-outline-primary">
                           Rental
                        </a>
                        <a href="#" class="btn btn-sm btn-primary">
                          Tambah Pesanan
                        </a>
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