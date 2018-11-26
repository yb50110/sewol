@extends('layouts.app')
@section('content')

    <div class="offset-md-1 col-md-4 page-introduction">
        <img class="page-icon" src="">
        <h1 class="page-title"></h1>
        <p class="page-subtitle" id="page-subtitle-timeline"></p>
    </div>

    @include('components.timeline-timeline')

@endsection
@section('scripts')

    <script src="{{ mix('js/timeline.js') }}"></script>

@append