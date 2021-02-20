@extends('partials.Front')

@section('content')

  <div class="container">
    <div  id="app" class="card-body">
      <customer-component></customer-component>
    </div>
  </div>
<script src="{{mix('js/app.js')}}"></script>
@endsection