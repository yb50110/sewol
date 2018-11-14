@extends('layouts.app')
@section('content')

    <div class="page-introduction">
        <img class="page-icon" src="{{ asset('images/timeline-ribbon.png') }}" alt="Sewol yellow ribbon">
        <h1 class="page-title">Sources</h1>
        <p class="col-md-5 page-subtitle" id="page-subtitle-timeline">The following sources are where I was able to gather my information. There were so many important pieces that I had to omit only because of brevity purposes for the site. I urge you to investigate the situation for yourself.</p>
    </div>

    <h2 class="page-h2">Documentaries & Films</h2>
    <div class="group source-container">
        @foreach($documentaries as $source)
            <a href="{{ $source->url }}" class="group source--documentaries">
                <div class="source-image" style="background-image: url('{{ $source->image_url }}')"></div>
                <p class="source-title">{{ $source->title }}</p>
                <p class="source-author">{{ $source->author }}</p>
                <p class="source-date">{{ date('F j, Y', strtotime($source->source_date)) }}</p>
            </a>
        @endforeach
    </div>

    <h2 class="page-h2">News Articles</h2>
    <div class="group source-container">
        @foreach($news as $source)
            <a href="{{ $source->url }}" class="group source--news">
                <div class="source-image" style="background-image: url('{{ $source->image_url }}')"></div>
                <p class="source-title">{{ $source->title }}</p>
                <p class="source-author">{{ $source->author }}</p>
                <p class="source-date">{{ date('F j, Y', strtotime($source->source_date)) }}</p>
            </a>
        @endforeach
    </div>

    <h2 class="page-h2">Other Resources</h2>
    <div class="group source-container--other">
        @foreach($others as $source)
            <a href="{{ $source->url }}" class="group source--other">
                <div class="source-image" style="background-image: url('{{ $source->image_url }}')"></div>
                <p class="source-title">{{ $source->title }}</p>
                <p class="source-description">{{ $source->description }}</p>
            </a>
        @endforeach
    </div>

    {{--todo--}}
    <div class="footer-water"></div>

@endsection
@section('scripts')

@append