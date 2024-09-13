@extends('_layouts.lite')
@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Sitemap</h3>
    </div>
    <div class="list-group list-group-flush">
      @foreach ($items as $key => $item)
        <a href="#{{$key}}" class="list-group-item list-group-item-action">
          {{$item}}
        </a>
      @endforeach
    </div>
  </div>
@endsection
