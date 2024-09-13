@extends('_layouts.lite')
@section('content')
  @php
    $docs = [
      'Dashbnoard Login',
      'Telegram Chatbot',
      'Scren Capture Gallery',
      'Dashboard Admin Manual',
    ];
  @endphp
  <div class="col-md-8 mx-auto">
    <h1 class="text-center">Dashboard Admin Get Started</h1>
    <div class="row row-cols-2 g-2">
      @foreach($docs as $doc)
        <div class="col">
          <div class="card card-body">
            <div class="font-weight-medium">{{$doc}}</div>
            <div class="text-secondary">Research Nurse</div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
