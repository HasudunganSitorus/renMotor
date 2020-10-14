@extends('partials.Front')

@section('content')
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><small> Data Orang Tua </small></h3>
      </div>
          <li class="nav-item d-none d-sm-inline-block">
            <a href=" {{route('cucu.create')}} " class="nav-link">Tambah Data</a>
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
                      <th style="width: 20%"> Nama Anak</th>
                      <th style="width: 20%"> Nama Orang Tua </th>
                      <th style="width: 20%"> Jenis Kelamin </th>
                      <th style="width: 10%" > Aksi </th>
                  </tr>
              </thead>
              @foreach($cucus as $cucu)
                <tbody>
                    <tr>
                        <td> {{$loop->iteration}} </td>
                        <td> {{ $cucu->nama }} </td>
                        <td> {{ $cucu->ortu->nama }}</td> 
                        
                        
                        
                        <td>{{ $cucu['jenisKelamin'] }}</td>
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-warning btn-sm" href="{{route('cucu.edit', $cucu->id)}}">
                              Edit
                            </a>
                        <form name="{{ $cucu->id }}" action="{{route('cucu.destroy', $cucu->id)}}" method="post" style="display: inline-block;">
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