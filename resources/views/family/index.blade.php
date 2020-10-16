@extends('partials.Front')

@section('content')
  <div class="tree">
    <ul>
      @foreach ($parents as $parent)
        <li>
            <a class="bg-primary" href="#" >{{$parent->name}}</a>
            <ul>
              @foreach ($parent->childs as $child)
                <li>
                  <a href="#">{{$child['name']}} </a>
                </li>
              @endforeach
            </ul>
            @foreach ($grandchilds as $grandchild)
              <li>
                  <ul>
                    <a href="#">{{$grandchild['name']}}</a>
                  </ul>
                </li>
              @endforeach
          @endforeach
        </li>
    </ul>
  </div>
@endsection