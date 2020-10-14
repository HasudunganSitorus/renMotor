@extends('layouts.master')

@section('content')
<div class="container">
    <form class="card" role="form" method="POST" action="{{ route('motor.store') }}">
        @csrf
        {{--  Row  --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h3 class="card-title">List Motor </h3>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nama </label>
                                        <input id="nama" name="nama" class="form-control" placeholder="Nama Motor" value="" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">No Plat </label>
                                        <input  id="noPlat" name="noPlat" class="form-control" placeholder=" No Plat Motor" value="" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Gambar </label>
                                        <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kondisi motor</label>
                                        <select class="form-control" name="kondisi" id="exampleFormControlSelect1">
                                            <option value="OK">Layak Pakai</option>
                                            <option value="PERBAIKAN">Dalam Perbaikan</option>
                                        </select>
                                </div>
                            </div>
                        </div><!-- /.row -->
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-info ml-auto">Submit</button>
                            </div>  
                    </div><!-- /.card-body --> 
            </div> <!-- /.col-md --> 
        </div> <!-- /.row --> 
    </form>
</div>

@endsection

