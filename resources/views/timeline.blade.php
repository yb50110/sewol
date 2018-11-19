@extends('layouts.app')
@section('content')

    <div class="offset-md-1 page-introduction">
        <img class="page-icon" src="{{ asset('images/timeline-ribbon.png') }}" alt="Sewol yellow ribbon">
        <h1 class="page-title">Sewol Ferry Incident</h1>
        <p class="col-md-6 page-subtitle" id="page-subtitle-timeline"></p>
    </div>

    @include('components.timeline-timeline')

@endsection
@section('scripts')

    <script src="{{ mix('js/timeline.js') }}"></script>

@append