@extends('partials.Front')

@section('content')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left"><strong>Tambah Data Permasalahan</strong>
        </div>
          {{-- @if($errors->all())
            @include('layouts.error')
          @endif --}}
            <div class="card-body">
              <form method="POST" action="{{route('ortu.store')}}">
                @csrf
                  <div class="form-group">
                    <label for="kodePermasalahan"><strong> Nama Orang Tua </strong></label>
                      <input type="text" name="nama" value="{{old('nama')}}" placeholder=" Nama Orang tua" class="form-control"  id="kodePermasalahan" >
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1"><strong>  Jenis Kelamin </strong></label>
                      <select type="text" name="jenisKelamin" class="form-control" id="exampleFormControlSelect1">
                        <option value="Laki-Laki" >Laki-Laki</option>
                        <option value="Perempuan" >Perempuan</option>
                      </select>
                  </div>
                  <div class="card-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                  </div>
              </form>
            </div>
          </div>
        </div>
@stop