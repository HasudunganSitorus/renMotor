@extends('layouts.master')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-headling-mb-4"> Articles List</div>    
                <div class="panel-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Articles</th>
                            <th scope="col">Tags</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                  <th scope="row">{{$loop->odd}}</th>
                                    <td>{{$article->title}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>   
        </div>
    </div>
</div>


@endsection