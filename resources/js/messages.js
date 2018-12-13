$(document).ready(function () {
    // hide for messages page
    $('footer').remove();

    // change the backgrund color synchronously as when background image loads
    setTimeout(function() {
        $('.messages').css('background-color', '#000000')
    }, 2000);

    /**
     * Gets respective letter information
     * This allows asynchronous retrieval of data rather than loading all letter's data on page load
     */
    $('.message-item').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'php/MessageGet.php',
            method: 'GET',
            dataType: 'html',
            data: {
                message_id: $(this).attr('message-id'),
            },
            success: function (result) {
                result = JSON.parse(result);

                var id = result.id;
                var text = result.text;
                var created_at = result.created_at;

                $('#readMessage p').html(text);
            }
        })
    });

    /**
     * Disable .button--save unless textarea is filled
     */
    $('#final_span').keyup(function () {
        var value = $.trim($(this).val());
        if (value.length > 0) {
            $('.button--save').prop("disabled", false);
        } else {
            $('.button--save').prop("disabled", true);
        }
    });

    /**
     * Animation effect for when message-button is clicked
     */
    $('[class*="message-button"]').click(function () {
        $('.success-image-final').hide();

        // slide water down
        $('.messages').animate({
            top: '100%' // height of nav and page-intro
        }, 1500);

        // slide intro up
        $('.page-introduction').animate({
            marginTop: '-100%'
        }, 3000);

        // fadeout nav and buttons
        $('.nav').fadeOut();
        $('[class*="message-button"]').delay(1000).fadeOut();

        // open modal
        setTimeout(function(){
            document.getElementById("final_span").select();
            $('#createMessage').modal('show').fadeIn();
        }, 1000);
    });

    /**
     * Animation effect for when modal is closing
     */
    $('.button--close').click(function() {
        // close modal and clear textarea
        setTimeout(function(){
            $('#createMessage').modal('hide').fadeOut();
            $('#final_span').delay(1000).val('');
        }, 1000);

        // slide intro down
        $('.page-introduction').animate({
            marginTop: '0'
        }, 2000);

        // slide water up
        $('.messages').animate({
            top: '384px' // height of nav and page-intro
        }, 1500);

        // fadein nav and buttons
        $('.nav').fadeIn();
        $('[class*="message-button"]').delay(1000).fadeIn();
    });
});