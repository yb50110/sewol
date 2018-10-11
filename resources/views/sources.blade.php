@extends('layouts.app')
@section('content')

    <p>sources</p>

    @foreach($source_items as $source)
        <p>{{ $source->title }}</p>
    @endforeach

@endsection
@section('scripts')

@append