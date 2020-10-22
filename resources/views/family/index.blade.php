@extends('partials.Front')

@section('content')
  <body>
    <div id="app">
      <div class="container">
        <family></family>
      </div>
    </div>
    </body>
  <script src="{{mix('js/app.js')}}"></script>
  {{--  <div class="tree">
    <ul>
      @foreach ($parents as $parent)
        <li>
            <a class="bg-info" href="#" >{{$parent->name}}</a>
            <ul>
              @foreach ($parent->childs as $child)
                <li>
                  <a href="#">{{$child['name']}} </a>
                  <ul>
                    <li> 
                      <a href="#">Grandchilds</a>
                    </li>
                  </ul>
                </li>
              @endforeach
            </ul>
          @endforeach
        </li>
    </ul>
  </div>   --}}
@endsection