@extends('layouts.master')

@section('content')
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Perbaikan Motor</h3>
      </div>
          <li class="nav-item d-none d-sm-inline-block">
            <a href=" {{route('perbaikan.create')}} " class="nav-link">Tambah Data</a>
          </li>
            @if(session('status'))
              <div class="alert alert-success" role="alert">
                {{session('status')}}  
              </div>
            @endif
        <div class="card-body p-0">
          <table class="table table-bordered table-hover">
              <thead class="thead-dark">
                  <tr>
                      <th style="width: 1%"> No </th>
                      <th style="width: 15%"> Motor </th>
                      <th style="width: 15%"> Bagian </th>
                      <th style="width: 15%"> Jumlah </th>
                      <th style="width: 15%"> Total </th>
                      <th style="width: 15%"> Tanggal </th>
                      <th style="width: 20%" > Aksi </th>
                  </tr>
              </thead>
              @foreach($perbaikans as $perbaikan)
                <tbody>
                    <tr>
                        <td> {{$loop->iteration}} </td>
                        <td> 
                            {{--  nama Motor  --}}
                        @foreach ($perbaikan->motor as $motor)
                            {{ $motor->nama}}
                        @endforeach
                        </td>
                        <td> {{$perbaikan->bagian}} </td>
                        <td> {{$perbaikan->jumlah}} </td>
                        <td> {{$perbaikan->total}} </td>
                        <td> {{$perbaikan->tanggal}} </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-warning btn-sm" href=" # ">
                              Edit
                            </a>
                            <form name="{{ $perbaikan->id }}" action="#" method="post" style="display: inline-block;">
                        @csrf
                          @method('DELETE')
                            <input type="submit" name="" value="Delete" class="btn btn-danger btn-sm">
                      </form>
                        </td>
                    </tr>
              @endforeach
                </tbody>
          </table>
        </div>
      <div class="pagination justify-content-center " style="margin:20px 0">
      </div>
    </div>
  </section>
@endsection