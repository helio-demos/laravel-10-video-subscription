@extends('_layouts.lite')

@section('content')

@php
    // Get Page Data in Array
    $filePath = resource_path()."/yaml/video-streaming/component-pages/".$page.".yaml";
@endphp

@if (file_exists($filePath))

  @php
    $vsCodePath = "vscode://file/".$filePath;
    $yamlContent = file_get_contents($filePath);
    $array = Symfony\Component\Yaml\Yaml::parseFile($filePath);
    // Gat Content
    $title = $array['title'];
    $subtitle = $array['subtitle'];
    $components = $array['components'];
  @endphp


  <div class="row justify-content-center">
    <div class="col-lg-10 col-xl-9">
      <div class="card card-lg">





        <div class="card-body markdown">
          <h1>{{$title}}</h1>
          @foreach ($components as $component)

                @php
                    //$componentYamlFilePath = resource_path().'/yaml/video-streaming/components/button.yaml';
                    $componentFileName = Str::slug($component,'-');
                    $componentYamlFilePath = resource_path()."/yaml/video-streaming/components/{$componentFileName}.yaml";
                    // If file not found create
                    if(!file_exists($componentYamlFilePath)){
                      $defaultContentPath = resource_path().'/yaml/video-streaming/components/default.yaml';
                      $defaultContent = file_get_contents($defaultContentPath);
                      File::put($componentYamlFilePath,$defaultContent);
                    }

                    $vsCodePathComponentYaml = "vscode://file/".$componentYamlFilePath;
                    // end If file not found create
                    //$componentConetnt = file_get_contents($componentYamlFilePath);
                    $componentConetntArray = Symfony\Component\Yaml\Yaml::parseFile($componentYamlFilePath);
                    //dd($componentConetnt);
                    //dd($componentConetntArray);
                    //dd($componentConetntArray['content']);
                    //dd($componentConetntArray['script']);
                    $snippetBlade = $componentConetntArray['content'];
                @endphp



                <h2 class="mt-5 pt-5">{{$component}}</h2>
                <h3>{{$componentConetntArray['title']}}</h3>
                <h4>{{$componentConetntArray['subtitle']}}</h4>
                <p>{{$componentConetntArray['body']}}</p>

                <div class="language-yaml highlighter-rouge">
                    {{-- <div class="highlight"><pre class="highlight"><code>{!! $yamlContent !!}</code></pre></div> --}}
                    <div class="highlight"><pre class="highlight"><code>{{$snippetBlade}}</code></pre></div>
                    @isset($componentConetntArray['script'])
                      @php
                          $snippetScript = $componentConetntArray['script'];
                      @endphp
                      <div class="highlight"><pre class="highlight"><code>{{$snippetScript}}</code></pre></div>
                    @endisset
                </div>


                <div class="card mb-5">
                    <img
                        {{-- src="https://preview.tabler.io/static/photos/everything-you-need-to-work-from-your-bed.jpg" --}}
                        src="https://placehold.co/1200x400"
                        class="img-body"
                        alt="image desc" />
                    <div class="card-footer d-flex justify-content-end">
                        <a href="{{$vsCodePathComponentYaml}}" class="btn btn-outline-primary me-3">
                            View in Model
                        </a>
                        <a href="{{$vsCodePathComponentYaml}}" class="btn btn-outline-primary">
                            View in New Page
                        </a>
                    </div>
                    <div class="card-footer pb-0">
                        <p>
                          <b>Foot Note</b><br>
                          {{-- File names: component-yaml.yml | component-screen-capture.jpg --}}
                          <br />
                          Links:
                          <a href="{{$vsCodePathComponentYaml}}">
                              Edit Component Yaml
                          </a>
                          &nbsp;&nbsp;|&nbsp;&nbsp;
                          <a href="{{$vsCodePathComponentYaml}}">
                              Open Component Screen Capture in New Tab
                          </a>
                        </p>

                    </div>
                </div>





            @endforeach
        </div>





      </div>
    </div>
  </div>


@else
  @php
      $fileName = basename($filePath);
  @endphp
  <input
    class="input w-100"
    type="text" value="{{$fileName}}">
@endif



@endsection
