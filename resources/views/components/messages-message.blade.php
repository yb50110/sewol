<button class="message-item"
        onclick="loadMessage('{{ route('messages.show', ['message_id' => $message_id]) }}')"
        message-id="{{ $message_id }}"
        type="button"
        data-toggle="modal"
        data-target="#readMessage"
        data-backdrop="static"
        data-keyboard="false"
        style="top: {{ rand(5, 90) }}%;
                left: {{ rand(10, 80) }}%;
                width: {{ rand(50, 80) }}px;
                transform: rotate(-{{ rand(0, 10) }}deg);
                animation-delay: {{ rand(1, $message_items_count/4) }}s;">
    <img src="{{ asset('images/messages-boat.png') }}">
</button>

<script>
    /**
     * Gets respective letter information
     * This allows asynchronous retrieval of data rather than loading all letter's data on page load
     */
    function loadMessage(url) {
        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'html',
            // data: {
            //     message_id: $(this).attr('message-id'),
            // },
            success: function (result) {
                result = JSON.parse(result);

                var text = result.text;

                $('#readMessage p').html(text);
            }
        })
    };
</script>