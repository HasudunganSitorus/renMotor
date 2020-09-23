@extends('layouts.master')

@section('content')
<div class="container">
    <form class="card" role="form" method="POST" action="{{ route('motor.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">
                    <h3 class="card-title">Create a new Motor </h3>
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nama Motor</label>
                                        <input id="nama" name="nama" class="form-control" placeholder="Nama Motor" value="" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">No Plat Motor</label>
                                            <input  id="noPlat" name="noPlat" class="form-control" placeholder=" No Plat Motor" value="" type="text">
                                        </div>
                                    </div>


                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Penyewa</label>
                                            <select id="penyewa_id" name="penyewa_id" class="form-control custom-select">
                                                @foreach($penyewas as $penyewa)
                                                <option value="{{$penyewa->id}}">{{$penyewa->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                        <label class="form-label">Gambar Motor </label>
                                        <input  id="avatar" name="avatar" class="form-control" placeholder="Gambar Motors " value="" type="text">
                                        
                                        </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Perlengkapan</label>
                                            <select id="perlengkapan_id" name="perlengkapan_id" class="form-control custom-select">
                                                @foreach($perlengkapans as $perlengkapan)
                                                    <option value="{{$perlengkapan->id}}">{{$perlengkapan->document}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                    </div>
            </div>
            
            <div class="card-footer text-right">
                    <div class="d-flex">
                    <a href="{{ route('motor.index') }}" class="btn btn-link">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-auto">Submit</button>
                    </div>
            </div>    
        </div>
    </form>
</div>

@endsection

