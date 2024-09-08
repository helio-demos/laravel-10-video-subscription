@extends('_layouts.lite')

@section('content')

@php
    // Get Page Data in Array
    $filePath = resource_path()."/yaml/video-streaming/component-pages/".$page.".yaml";
    $vsCodePath = "vscode://file/".$filePath;
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
                <h2>{{$component}}</h1>
                <p>
                    Path:
                    <br>
                    Links:
                    <a href="#">
                        Open Yaml File
                    </a>
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quam voluptates possimus ut non et aspernatur tempore excepturi cum quibusdam. Exercitationem quod ad commodi mollitia assumenda tempore fuga qui rem!
                </p>


                <div class="language-scss highlighter-rouge">
                    <div class="highlight">
                      <pre class="highlight"><code><span class="nv">$extra-colors</span><span class="p">:</span> <span class="p">(</span>
<span class="s2">"blue"</span><span class="o">:</span> <span class="nv">$blue</span><span class="o">,</span>
<span class="s2">"azure"</span><span class="o">:</span> <span class="nv">$azure</span><span class="o">,</span>
<span class="s2">"indigo"</span><span class="o">:</span> <span class="nv">$indigo</span><span class="o">,</span>
<span class="s2">"purple"</span><span class="o">:</span> <span class="nv">$purple</span><span class="o">,</span>
<span class="s2">"pink"</span><span class="o">:</span> <span class="nv">$pink</span><span class="o">,</span>
<span class="s2">"red"</span><span class="o">:</span> <span class="nv">$red</span><span class="o">,</span>
<span class="s2">"orange"</span><span class="o">:</span> <span class="nv">$orange</span><span class="o">,</span>
<span class="s2">"yellow"</span><span class="o">:</span> <span class="nv">$yellow</span><span class="o">,</span>
<span class="s2">"lime"</span><span class="o">:</span> <span class="nv">$lime</span><span class="o">,</span>
<span class="s2">"green"</span><span class="o">:</span> <span class="nv">$green</span><span class="o">,</span>
<span class="s2">"teal"</span><span class="o">:</span> <span class="nv">$teal</span><span class="o">,</span>
<span class="s2">"cyan"</span><span class="o">:</span> <span class="nv">$cyan</span><span class="o">,</span>
<span class="s2">"gray"</span><span class="o">:</span> <span class="nv">$gray-600</span><span class="o">,</span>
<span class="s2">"gray-dark"</span><span class="o">:</span> <span class="nv">$gray-800</span><span class="o">,</span>
<span class="s2">"dark"</span><span class="o">:</span> <span class="nv">$dark</span>
<span class="p">)</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
</code></pre>
                    </div>
                  </div>





                  <div class="card">
                    <div class="card-body">
                        <img
                            src="https://preview.tabler.io/static/photos/everything-you-need-to-work-from-your-bed.jpg"
                            class="img-fluid"
                            alt="image desc" />
                    </div>
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
