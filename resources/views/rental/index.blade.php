@extends('layouts.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Motor -id</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">E-commerce</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
                <img src="{{('gambar/User1.jpg')}}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3><small> Jumlah</small></h3>
                @foreach ($rentals as $rental)
                    <h3 class="my-3"> <small> {{$rental->jumlah}} </small></h3>
                @foreach ($rental->motor as $motor)
                        {{-- <h3 class="my-3"> <small> {{$motor->nama}} Nama Motor</small></h3> --}}
                    @endforeach
                @endforeach
              <hr>
              <h4> <small> Kondisi Motor</small></h4>
                <ul>
                    <li></li>
                </ul>
                <hr>
              <h4 class="mt-3"><small>Durasi Penggunaan</small></h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl">S</span>
                  <br>
                  Small
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl">M</span>
                  <br>
                  Medium
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl">L</span>
                  <br>
                  Large
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl">XL</span>
                  <br>
                  Xtra-Large
                </label>
              </div>
              <hr>
              <h4> <small> Harga Total </small></h4>
              <div class="bg-gray py-2 px-3 mt-4">
                <h5 class="mb-0">
                <small>   Rp. 00.00</small>
                </h5>
              </div>

              <div class="mt-4">
                  <div class="btn btn-outline-primary">
                    Rental
                  </div>
                <div class="btn btn-secondary">
                  Tambah Pesanan
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection