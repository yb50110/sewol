@extends('layouts.app')
@section('content')

    <div data-aos="fade" data-aos-easing="linear" data-aos-duration="1000">
        <div class="offset-md-1 col-md-4 page-introduction page-introduction-messages">
            <img class="page-icon" src="{{ asset('images/papership.png') }}" alt="Sewol yellow ribbon">
            <h1 class="page-title">Messages</h1>
            <p class="page-subtitle" id="page-subtitle-timeline">
                Leave a messages for the families and victims.
                <br>
                You may view messages from other visitors as well.</p>
            <div data-aos="fade" data-aos-easing="linear" data-aos-duration="1000"  data-aos-delay="1000">
                <button type="button" class="btn btn-primary message-button" data-toggle="modal" data-target="#createMessage" data-backdrop="static" data-keyboard="false">
                    leave a message
                </button>
            </div>
        </div>
    </div>

    <div class="messages" style="height: {{ count($messages_items) * 50 }}px;">
        @foreach($messages_items as $message)
            <button class="message-item"
                    message-id="{{ $message->id }}"
                    type="button"
                    data-toggle="modal"
                    data-target="#readMessage"
                    data-backdrop="static"
                    data-keyboard="false"
                    style="top: {{ rand(10, 80) }}%;
                            left: {{ rand(0, 80) }}%;
                            width: {{ rand(50, 80) }}px;
                            transform: rotate(-{{ rand(0, 7) }}deg);
                            animation-delay: {{ rand(1, count($messages_items)/2) }}s;">
                <img src="{{ asset('images/messages-boat.png') }}">
            </button>
        @endforeach
    </div>

    <!-- Button trigger modal for creating message -->
    <button type="button" class="btn btn-primary message-button--yellow" data-toggle="modal" data-target="#createMessage" data-backdrop="static" data-keyboard="false">
        leave a message
    </button>

    {{-- Modal for messageRead --}}
    @include('components/messages-readMessage')

    <!-- Modal for creating message -->
    @include('components/messages-createMessage')
    <div class="success-image">
        <div class="success-image-background"></div>
        {{-- gif image --}}
        <img class="success-image-final" src="{{ asset('images/messages-boat.png') }}" alt="Yellow boat signifying the message created">
    </div>

@endsection
@section('scripts')

    <script src="{{ asset('js/voice-recognition.js') }}"></script>
    <script src="{{ asset('js/messages.js') }}"></script>

@append