<button class="message-item"
        message-id="{{ $message_id }}"
        type="button"
        data-toggle="modal"
        data-target="#readMessage"
        data-backdrop="static"
        data-keyboard="false"
        style="top: {{ rand(10, 80) }}%;
                left: {{ rand(10, 80) }}%;
                width: {{ rand(50, 80) }}px;
                transform: rotate(-{{ rand(0, 7) }}deg);
                animation-delay: {{ rand(1, $message_items_count/4) }}s;">
    <img src="{{ asset('images/messages-boat.png') }}">
</button>