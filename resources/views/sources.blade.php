@extends('layouts.app')
@section('content')

    <div class="page-introduction">
        <img class="page-icon" src="{{ asset('images/timeline-ribbon.png') }}" alt="Sewol yellow ribbon">
        <h1 class="page-title">Sources</h1>
        <p class="col-md-5 page-subtitle" id="page-subtitle-timeline">The following sources are where I was able to gather my information. There were so many important pieces that I had to omit only because of brevity purposes for the site. I urge you to investigate the situation for yourself.</p>
    </div>

    <h2 class="page-h2">Documentaries</h2>
    @foreach($documentaries as $source)
        <div class="source-image">
            <img class="source-image" src="{{ $source->image_url }}">
            <p class="source-title">{{ $source->title }}</p>
            <p>{{ $source->author }}</p>
            <p>{{ $source->source_date }}</p>
        </div>
    @endforeach

    <h2 class="page-h2">News Articles</h2>
    @foreach($news as $source)
        <p>{{ $source->title }}</p>
    @endforeach

    <h2 class="page-h2">Other Resources</h2>
    @foreach($others as $source)
        <p>{{ $source->title }}</p>
    @endforeach

@endsection
@section('scripts')

@append