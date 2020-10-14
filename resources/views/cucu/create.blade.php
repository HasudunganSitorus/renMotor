@extends('partials.Front')

@section('content')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left"><strong>Tambah Data Cucu</strong>
        </div>
          {{-- @if($errors->all())
            @include('layouts.error')
          @endif --}}
            <div class="card-body">
              <form method="POST" action="{{route('cucu.store')}}">
                @csrf
                  <div class="form-group">
                    <label for="kodePermasalahan"><strong> Nama Cucu </strong></label>
                      <input type="text" name="nama" value="{{old('nama')}}" placeholder=" Nama Orang tua" class="form-control"  id="kodePermasalahan" >
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1"><strong>  Jenis Kelamin </strong></label>
                      <select type="text" name="jenisKelamin" class="form-control" id="exampleFormControlSelect1">
                        <option value="Laki-Laki" >Laki-Laki</option>
                        <option value="Perempuan" >Perempuan</option>
                      </select>
                  </div>
                  <div class="form-group{{ $errors->has('ortu_id') ? ' has-error' : '' }}">
                    <label for="ortu_id" class="col-md-4 control-label"><strong> Nama Ortu </strong></label>

                    <div class="col-md-14">
                        <select name="ortu_id" class="form-control" required>
                            @foreach ($ortus as $ortu)
                                <option value="{{ $ortu->id }}">{{ $ortu->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('ortu_id'))
                            <span class="help-block">
                            <strong>{{ $errors->first('ortu_id') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                  <div class="card-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                  </div>
              </form>
            </div>
          </div>
        </div>
@stop