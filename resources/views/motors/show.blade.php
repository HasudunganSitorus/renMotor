@extends('partials.Front')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
            <li class="breadcrumb-item"><a class="waves-effect" style="text-decoration: none" href="{{route('motor.index')}}">Motor</a></li>
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

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                Product Image
              </div>
              <div class="col-12 product-image-thumbs">
                {{-- Product Image --}}
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h6 class="my-3"><small> {{ $motors['nama'] }} | {{ $motors['noPlat'] }} </small></h6>
                <hr>
                <form action="">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Durasi Pemakaian</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option value="1">1</option>
                        <option value="2" >2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option>5</option>
                      </select>
                  </div>
                    <hr>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Jumlah Motor</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                </form>
                <hr>
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                <small>  Total </small>
                </h2>
                <h6 class="mt-0">
                  <small>Rp: 00.00 </small>
                </h6>
              </div>

              <div class="mt-4">
                <div class="btn btn-outline-primary">
                <a href="#"></a> Rental
                </div>

                <div class="btn btn-secondary">
                  Tambah Pesanan
                </div>
              </div>
            </div>
            
          </div>
{{--           Deskripsi --}}
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Deskripsi</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Ulasan</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
              </div>
            </nav>
            <div class="tab-content p-2" id="nav-tabContent">
              {{--  Deskripsi  --}}
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
              <h6><small>Kondisi</small></h6>
                <ul>
                  <li> Kelistrikan: <small>{{ $kondisi['listrik'] }} </small></li>
                  <li> Mesin: <small> {{ $kondisi['mesin'] }} </small></li>
                  <li> Pengeraman: <small> {{ $kondisi['pengeraman'] }}</small></li>
                  <li> Kemampuan: <small> {{ $kondisi['kemampuan'] }} </small></li>
              </ul>
              </div>
              {{--  Ulasan  --}}
              <div class="tab-pane " id="product-comments" > 
                <div class="row">
                  <h6> Jumlah Seluruh Ulasan
                      <small>({{ $ulasanCount->count()}})</small>
                  </h6>
                  <div class="col-12">
                      @foreach ($ulasanById as $ulasan)
                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="/gambar/User.jpg" alt="user image">
                            <span class="username">
                              <a href="#">Nama Penyewa</a>
                            </span>
                          </div>
                          <p>
                            <small>
                              <ul class="list-group">
                                  <li  class="list-group-item list-group-item-secondary"> {{ $ulasan['keterangan'] }}</small></li>
                              </ul>
                          </p>
                        </div>
                          <hr>
                        @endforeach
                    </div>
                </div>
              </div>
                {{--  Ulasan  --}}
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> 
                  <div class="row">
                    <div class="col-12">
                      @foreach ($ratings as $rating)
                        <div class="post">
                          <div class="user-block">
                                
                            <img class="img-circle img-bordered-sm" src="/gambar/User.jpg" alt="user image">
                            <span class="username">
                              <a href="#">Jonathan Burke Jr.</a>
                            </span>
                            <span class="description">Shared publicly - 5 days ago</span>
                          </div>
                          <p>
                            <small>  {{ $rating['jumlah'] }}</small>
                          </p>
                        </div>
                        @endforeach
                    </div>
                  </div>

                  @foreach ($ratings as $rating)
                  <ul>
                    <ul>
                      <li>{{ $rating['jumlah'] }} |</li>
                    </ul>
                  </ul>
                  <hr>
                    @endforeach
                </div>
              </div>
              <hr>
          </div>
          {{-- End Deskripsi --}}
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>  <!-- /.content-wrapper -->
@endsection