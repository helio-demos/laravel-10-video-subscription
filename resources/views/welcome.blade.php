@extends('_layouts.lite')

@section('content')

  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Components</h3>
      </div>
      <div class="list-group list-group-flush">
        @php
            $components = config('video-streaming.ui-components');
        @endphp
        @foreach ($components as $component)
          @php
              $url = url("/component-pages/".Str::slug($component, '-'));
          @endphp
          <a href="{{$url}}" class="list-group-item list-group-item-action">
            {{$component}}
          </a>
        @endforeach
      </div>
    </div>
  </div>


  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Block</h3>
      </div>
      <div class="list-group list-group-flush">
        @foreach ($components as $component)
          <a href="{{url("/components/".$component)}}" class="list-group-item list-group-item-action">
            {{$component}}
          </a>
        @endforeach
      </div>
    </div>
  </div>

  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Pages</h3>
      </div>
      <div class="list-group list-group-flush">
        @foreach ($components as $component)
          <a href="#" class="list-group-item list-group-item-action">
            {{$component}}
          </a>
        @endforeach
      </div>
    </div>
  </div>













  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Dashboard Static Routes</h3>
      </div>
      <div class="list-group list-group-flush">
        @foreach ($components as $component)
          <a href="#" class="list-group-item list-group-item-action">
            {{$component}}
          </a>
        @endforeach
      </div>
    </div>
  </div>

  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Dashboard Dynamite Routes</h3>
      </div>
      <div class="list-group list-group-flush">
        @foreach ($components as $component)
          <a href="#" class="list-group-item list-group-item-action">
            {{$component}}
          </a>
        @endforeach
      </div>
    </div>
  </div>



@endsection
