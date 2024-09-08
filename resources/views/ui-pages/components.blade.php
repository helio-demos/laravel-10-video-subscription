@extends('_layouts.lite')

@section('content')

@php
    // Get Page Data in Array
    $filePath = resource_path()."/yaml/video-streaming/component-pages/".$page.".yaml";
    $vsCodePath = "vscode://file/".$filePath;
    $yamlContent = file_get_contents($filePath);
    $array = Symfony\Component\Yaml\Yaml::parseFile($filePath);
    // Gat Content
    $title = $array['title'];
    $subtitle = $array['subtitle'];
    $components = $array['components'];
@endphp


{{-- <a href="{{$filePath}}">
    Edit VS Code
</a> --}}



<div class="row justify-content-center">
    <div class="col-lg-10 col-xl-9">
      <div class="card card-lg">





        <div class="card-body markdown">
            <h1>{{$title}}</h1>
            @foreach ($components as $component)
                <h2 class="mt-5">{{$component}}</h2>
                <p>
                    Path:
                    <br />
                    Links:
                    <a href="#">
                        Open Yaml File
                    </a>
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quam voluptates possimus ut non et aspernatur tempore excepturi cum quibusdam. Exercitationem quod ad commodi mollitia assumenda tempore fuga qui rem!
                </p>

                <div class="language-yaml highlighter-rouge">
                    <div class="highlight"><pre class="highlight"><code>{!! $yamlContent !!}</code></pre></div>
                </div>


                <div class="card mb-5">
                    <img
                        src="https://preview.tabler.io/static/photos/everything-you-need-to-work-from-your-bed.jpg"
                        class="img-body"
                        alt="image desc" />
                    <div class="card-footer">
                        <a href="#" class="btn btn-outline-primary">
                            View in Model
                        </a>
                        <a href="#" class="btn btn-outline-primary">
                            View in New Page
                        </a>
                    </div>
                </div>








            @endforeach
        </div>





      </div>
    </div>
</div>
@endsection
