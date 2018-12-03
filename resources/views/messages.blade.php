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
            <button type="button" class="btn btn-primary message-button">
                leave a message
            </button>
        </div>
    </div>

    <div class="messages" style="height: {{ count($messages_items) * 50 }}px;">
        <div class="messages-background"></div>
        @foreach($messages_items as $message)
            @include('components.messages-message', ['message_items_count' => count($messages_items), 'message_id' => $message->id])
        @endforeach
    </div>

    <!-- Button trigger modal for creating message -->
    <button type="button" class="btn btn-primary message-button--yellow">
        leave a message
    </button>

    {{-- Modal for messageRead --}}
    @include('components.messages-readMessage')

    <!-- Modal for creating message -->
    @include('components.messages-createMessage')

    {{-- Success image for storing message --}}
    <div class="success-image">
        <div class="success-image-background"></div>
        <img class="success-image-start-1" src="{{ asset('images/messages-fold-1.png') }}" alt="Folding of message">
        <img class="success-image-start-2" src="{{ asset('images/messages-fold-2.png') }}" alt="Folding of message">
        <img class="success-image-start-3" src="{{ asset('images/messages-fold-3.png') }}" alt="Folding of message">
        <img class="success-image-final" src="{{ asset('images/messages-boat.png') }}" alt="Yellow boat signifying the message created">
    </div>

@endsection
@section('scripts')

    <script src="{{ asset('js/voice-recognition.js') }}"></script>
    <script src="{{ asset('js/messages.js') }}"></script>

@append