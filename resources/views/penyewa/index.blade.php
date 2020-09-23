@extends('layouts.master')

@section('content')
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Penyewa</h3>
      </div>
          <li class="nav-item d-none d-sm-inline-block">
            <a href=" {{route('penyewa.create')}} " class="nav-link">Tambah Data</a>
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
                      <th style="width: 20%"> Nama </th>
                      <th style="width: 20%"> Motor </th>
                      <th style="width: 20%"> Jam Keluar </th>
                      <th style="width: 20%"> Jam Masuk </th>
                      <th style="width: 20%" > Aksi </th>
                  </tr>
              </thead>
              @foreach($penyewas as $penyewa)
                <tbody>
                    <tr>
                        <td> {{$loop->iteration}} </td>
                        <td> {{$penyewa->nama}} </td>
                        <td> 
                        @foreach ($penyewa->motors as $motor)
                            {{ $motor->nama}}
                        @endforeach
                        </td>
                        <td>
                            {{-- Jam Keluar --}}
                            @foreach ($penyewa->penjadwalan as $jadwal)
                                {{ $jadwal->jamKeluar}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($penyewa->penjadwalan as $jadwal)
                                {{ $jadwal->jamMasuk}}
                            @endforeach
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-warning btn-sm" href=" # ">
                              Edit
                            </a>
                            <form name="{{ $penyewa->id }}" action="#" method="post" style="display: inline-block;">
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