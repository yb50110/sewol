<div class="modal fade" id="createMessage" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @csrf
            <div class="center" id="headline">
                <div id="info">
                    <p id="info_start"></p>
                    <p id="info_speak_now">What has been said: <span id="interim_span"></span></p>
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
                    <textarea name="final_span" id="final_span" class="final" required></textarea>
                </div>
            </div>

            <div class="button-group">
                <div class="button--record" id="start_button">talk to write</div>
                <br><br><br>
                <button class="button--save" disabled="disabled" onclick="createMessage('{{ route('messages.store') }}')">save</button>
                <br>
                <button class="button--close" data-dismiss="modal">cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    function createMessage(url) {
        $.ajax({
            url: url,
            method: 'POST',
            dataType: 'json',
            data: {
                'text': $('#final_span').val(),
            },
            success: function (data) {
                $('.success-image-final').hide();

                // show .success-image folding
                $('.success-image').delay(1000).fadeIn();
                $('.success-image-start-1').fadeIn().delay(1000).fadeOut();
                $('.success-image-start-2').delay(2500).fadeIn().delay(500).fadeOut();
                $('.success-image-start-3').delay(4500).fadeIn().delay(1000).fadeOut();
                $('.success-image-final').delay(4500).fadeIn();
                $('.success-image-background').delay(7000).fadeOut();

                // close createMessage modal and clear textarea
                $('#createMessage').delay(1000).modal('hide');
                $('#final_span').delay(1000).val('');

                // hide all boats, text
                $('.message-item').hide();

                // slide water from bottom
                // water should be already slid down
                setTimeout(function () {
                    $('.messages').animate({
                        top: '384px' // height of nav and page-intro
                    }, 4000)
                }, 4000);

                // once water is there...
                setTimeout(function () {
                    // shuffle location of boats
                    var messages = $('.message-item').toArray();
                    messages.forEach(function (item, index) {
                        $(this[index]).css({
                            'top': Math.floor(Math.random() * 75) + 15 + '%',
                            'left': Math.floor(Math.random() * 80) + 10 + '%',
                            'width': Math.floor(Math.random() * 30) + 50 + 'px',
                            'transform': 'rotate(-' + Math.floor(Math.random() * 7) + 'deg)',
                            'animation-delay': '1s',
                        })
                    }, messages);
                    $('.message-item').fadeIn();

                    // show nav and page introduction
                    $('.page-introduction').animate({
                        marginTop: '0'
                    }, 2000);
                    $('.nav').fadeIn();
                    $('[class*="message-button"]').delay(1000).fadeIn();

                    $('.success-image-final').css('z-index', 'unset');
                }, 8000);
            }
        });
    }
</script>