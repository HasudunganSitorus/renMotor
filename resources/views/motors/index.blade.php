@extends('layouts.master')

@section('content')
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Motor</h3>
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
                      <th style="width: 15%"> Nama </th>
                      <th style="width: 15%"> No Plat </th>
                      <th style="width: 20%" > Avatar </th>
                      <th style="width: 5%" > Kondisi </th>
                      <th style="width: 5%" > Karburator </th>
                      <th style="width: 15%" > Aksi </th>
                  </tr>
              </thead>
              @foreach($motors as $motor)
                <tbody>
                    <tr>
                        <td> {{$loop->iteration}} </td>
                        <td> {{$motor->nama}} </td>
                        <td> {{$motor->noPlat}} </td>
                        <td> {{$motor->avatar}} </td>
                        <td> {{$motor->kondisi}} </td>
                        <td>
                              {{-- Pengeraman --}}
                              @foreach ($motor->getService as $motor)
                                  {{ $motor->karburator }}
                              @endforeach
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-warning btn-sm" href=" # ">
                              Edit
                            </a>
                            <form name="{{ $motor->id }}" action="#" method="post" style="display: inline-block;">
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