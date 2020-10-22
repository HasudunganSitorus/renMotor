@extends('layouts.master')

@section('content')

  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title text-center"><small>Data School</small></h3>
      </div>
          <li class="nav-item d-none d-sm-inline-block">
            <a href=" {{route('school.create')}} " class="nav-link text-left">Tambah Data</a>
          </li>
            @if(session('status'))
              <div class="alert alert-success" role="alert">
                {{session('status')}}  
              </div>
            @endif
        <div class="card-body p-0">
          <table class="table table-bordered table-hover">
              <thead class="thead-dark">
                  <tr class="text-center">
                      <th style="width: 1%"> No </th>
                      <th style="width: 10%">Subject Name</th>
                      <th style="width: 10%">Subject Name</th>
                      <th style="width: 20%"> requisite </th>
                      <th style="width: 10%">Subject Name</th>
                      <th style="width: 8%" > ACTION </th>
                  </tr>
              </thead>
              @foreach($requisite as $require)
                <tbody>
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $require['requisite'] }}</td>
                        <td></td>
{{--                         @foreach ($require->motor as $require)
                        <ul>
                          <li>
                            {{ $require->subjectname}} 
                          </li>
                        </ul>
                      @endforeach --}}
                        {{--  <td>{{ $require['subjectname'] }}</td>  --}}
                        <td>Name</td>
                        <td>Poin</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-warning btn-sm" href=" # ">
                              Edit
                            </a>
                            <form name="{{ $require->id }}" action="#" method="post" style="display: inline-block;" class="float-center">
                        @csrf
                          @method('DELETE')
                            <input type="submit" name="" value="Delete" class="btn btn-danger btn-sm float-center">
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