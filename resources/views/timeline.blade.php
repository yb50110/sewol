@extends('layouts.app')
@section('content')

    <h1>timeline</h1>

    @foreach($timeline_items as $event)
        <p>{{ $event->title }}</p>
    @endforeach

@endsection
@section('scripts')

@append