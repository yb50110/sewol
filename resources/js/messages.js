$(document).ready(function() {
    // hide for messages page
    $('footer').remove();

    /**
     * Gets respective letter information
     * This allows asynchronous retrieval of data rather than loading all letter's data on page load
     */
    $('.message-item').click(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'php/MessageGet.php',
            method: 'GET',
            dataType: 'html',
            data: {
                message_id: $(this).attr('message-id'),
            },
            success: function(result) {
                result = JSON.parse(result);

                var id = result.id;
                var text = result.text;
                var created_at = result.created_at;

                $('.modal-letter p').html(text);
            }
        })
    })

});