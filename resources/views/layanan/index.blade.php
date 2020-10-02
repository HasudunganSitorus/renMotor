@extends('layouts.master')

@section('content')
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Service Motor</h3>
      </div>
          <li class="nav-item d-none d-sm-inline-block">
            <a href=" {{route('motor.create')}} " class="nav-link">Tambah Data</a>
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
                      <th style="width: 10%"> Nama </th>
                      <th style="width: 10%"> Steam </th>
                      <th style="width: 10%" > Tanggal </th>
                      <th style="width: 10%" > Karburator/Injeksi </th>
                      <th style="width: 10%" > Kelistrikan </th>
                      <th style="width: 10%" > Pengereman </th>
                      <th style="width: 10%" > Aksi </th>
                  </tr>
              </thead>
              @foreach($services as $service)
                <tbody>
                    <tr>
                        <td> {{$loop->iteration}} </td>
                        <td>
                              {{-- Nama Motor --}}
                              @foreach ($service->motor as $s)
                                  {{ $s->nama }}
                              @endforeach
                        </td>
                        <td> {{$service->steam}} </td>
                        <td> {{$service->tanggal}} </td>
                        <td> {{$service->karburator}} </td>
                        <td> {{$service->kelistrikan}} </td>
                        <td> {{$service->pengereman}} </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-warning btn-sm" href=" # ">
                              Edit
                            </a>
                            <form name="{{ $service->id }}" action="#" method="post" style="display: inline-block;">
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