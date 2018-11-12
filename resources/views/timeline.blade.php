@extends('layouts.app')
@section('content')

    <h1>Sewol Ferry Incident</h1>
    <p>On the early morning of April 16, 2016, the Sewol ferry flipped and capsized, taking the lives of 304 passengers out of 476. Of the 476 passengers, 325 were high school students on a field trip.</p>

    @foreach($timeline_items as $event)
        <p>{{ $event->title }}</p>
    @endforeach

@endsection
@section('scripts')

@append