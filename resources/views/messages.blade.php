@extends('layouts.app')
@section('content')

    <h1>messages</h1>

    @foreach($messages_items as $message)
        {{-- todo: format date --}}
        <p>{{ $message->date }}: {{ $message->text }}</p>
    @endforeach

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('messages.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                            <div class="right">
                                <p id="start_button">
                                    Click me
                                </p>
                            </div>
                            <div id="results">
                                <textarea name="final_span" id="final_span" class="final" cols="30" rows="10" required></textarea>
                                {{--<span id="final_span" class="final"></span>--}}
                                {{--<span id="interim_span" class="interim"></span>--}}
                                {{-- todo: ㅇㅣ건 뭔지?? --}}
                                <p>
                            </div>
                        </div>
                        {{-- END MESSAGE INPUT --}}
                    </div>
                    <div class="modal-footer">
                        {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                        <button class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

    <script src="{{ mix('js/voice-recognition.js') }}"></script>

@append