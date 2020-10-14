@extends('partials.Front')

@section('content')
  <div class="container">
    <div class="card mt-5">
        <div class="card-header text-left">
          <strong>Update Data Orang Tua</strong>
        </div>
          <div class="card-body">
          <form method="POST" action="{{route('ortu.update', [$ortu->id])}}">
              @csrf
                @method('PUT')
		      <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
            <label for="nama"><strong> Nama Orang Tua</strong></label>
        	   <input type="text" id="nama" name="nama" class="form-control" value="{{$ortu->nama }}" require>
		          @if($errors->has('nama'))
		            <p class="help-block">
		              {{ $errors->first('nama') }}
		            </p>
		          @endif
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1"><strong> Jenis Kelamin </strong></label>
              <select type="text" name="jenisKelamin" class="form-control" id="exampleFormControlSelect1">
                <option value="Outside" @if($ortu->jenisKelamin =="Laki-Laki") selected @endif>Laki-Laki</option>
                <option value="Inside" @if($ortu->jenisKelamin =="Perempuan") selected @endif >Perempuan</option>
              </select>
          </div>       
          <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
@stop