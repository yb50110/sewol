@extends('layouts.app')
@section('content')

    {{-- TODO: TAKES WAY TOO LONG TO LOAD BECAUSE IMAGE IS TOO LARGE... CAN CROP IMAGE TO SHOW ONLY TOP? OR A BETTER WAY TO LET THE SHIP FADE IN?? --}}
    {{--<div class="temp-bg">--}}
    {{--<img class="ship" src="{{ asset('images/timeline-bg-ship.png') }}" alt="Sewol bow above water">--}}
    {{--</div>--}}

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