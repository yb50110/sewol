$(document).ready(function() {

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

                $('#messageRead .modal-body p').html(text);
            }
        })
    })

});