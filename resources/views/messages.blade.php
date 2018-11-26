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

            <button type="button" class="btn btn-primary message-button" data-toggle="modal" data-target="#exampleModalCenter">
                leave a message
            </button>
        </div>
    </div>

    <div class="messages" style="height: {{ count($messages_items) * 100 }}px;">

        @foreach($messages_items as $message)
            <button class="message-item"
                    message-id="{{ $message->id }}"
                    type="button"
                    data-toggle="modal"
                    data-target="#messageRead"
                    data-backdrop="static"
                    data-keyboard="false"
                    style="top: {{ rand(10, 80) }}%; left: {{ rand(0, 80) }}%; width: {{ rand(5, 7) }}%; transform: rotate(-{{ rand(0, 7) }}deg);">
                <img src="{{ asset('images/messages-boat.png') }}">
            </button>
        @endforeach

    </div>

    <!-- Button trigger modal for creating message -->
    <button type="button" class="btn btn-primary message-button--yellow" data-toggle="modal" data-target="#exampleModalCenter">
        leave a message
    </button>

    {{-- Modal for messageRead --}}
    <div class="modal modal-letter" id="messageRead" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <p><!-- HERE IS THE MESSAGE CONTENT --></p>
                <div class="button-group">
                    <a class="button-close" data-dismiss="modal">close</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for creating message -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('messages.store') }}">
                    @csrf
                    {{-- BEGIN MESSAGE INPUT --}}
                    <div class="center" id="headline">
                        <div id="info">
                            <p id="info_start">Click to begin speaking.</p>
                            <p id="info_speak_now">Speak now.</p>
                            <p id="info_no_speech">No speech was detected. You may need to adjust your
                                <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                                    microphone settings</a>.</p>
                            <p id="info_no_microphone" style="display:none">
                                No microphone was found. Ensure that a microphone is installed and that
                                <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                                    microphone settings</a> are configured correctly.</p>
                            <p id="info_allow">Click the "Allow" button above to enable your microphone.</p>
                            <p id="info_denied">Permission to use microphone was denied.</p>
                            <p id="info_blocked">Permission to use microphone is blocked. To change,
                                go to chrome://settings/contentExceptions#media-stream</p>
                            <p id="info_upgrade">Web Speech API is not supported by this browser.
                                Upgrade to <a href="//www.google.com/chrome">Chrome</a>
                                version 25 or later.</p>
                        </div>
                        <div id="results">
                            <textarea name="final_span" id="final_span" class="final" cols="30" rows="10" required></textarea>
                        </div>
                    </div>
                    {{-- END MESSAGE INPUT --}}
                    <div class="button-group">
                        <p id="start_button">Click me</p>
                        <button class="button-save">save</button>
                        <a class="button-close" data-dismiss="modal">cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

    <script src="{{ asset('js/voice-recognition.js') }}"></script>
    <script src="{{ asset('js/messages.js') }}"></script>

@append