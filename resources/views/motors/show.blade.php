@extends('layouts.menu')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
                <h6><small>From: </small></h6> 
                  <ul>
                    {{--  <li> {{ $penyewa['nama'] }}  --}}
                      @foreach ($ulasanById as $ulasan)
                      <ul>
                        <li> {{ $ulasan['keterangan'] }} </li>
                      </ul>
                      @endforeach
                    </li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> {{ $rating['jumlah'] }} </div>
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