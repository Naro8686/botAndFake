<link rel="stylesheet" href="/chat/assets/css/main.css">
<button class="open-button" id="open-support" type="button" onclick="openForm()"></button>
<div class="form-popup" id="myForm" style="display: none;">
    <form class="form-chat-container" id='myformSub' action="javascript:void(0);">
        <div class="chat-header">
            <div class="operator-face operator-face-0">
                <div title="Сергей Григорьевич" class="photo user-color-0 no-photo">
                </div>
            </div>
            <div class="team-wrapper">
                <div class="team">Obsługa klienta</div>
                <div class="activity-indicator">Ostatnio aktywn</div>
            </div>
            <div class="welcome-message">Wyślij nam wiadomość. My <br> odpowiemy wkrótce!</div>
            <h3 class="chat-title"></h3><a onclick="closeForm()" class="chat-close close"> </a>
        </div>
        <div class="form-content" id="messages"></div>
        <input type="text" id="message-text" class="chat-form__input focus" placeholder="Wpisz wiadomość">
        {{--        <img style='display: block;' src="/chat/assets/images/send_btn1.png" class="chat-btn" id="chat-send"--}}
        {{--             onclick="sendmsg();" alt="">--}}
        <input style="display: none;" id="chat-send" type="submit">
    </form>
</div>
<script>
    let page_from = parseInt("{{(int)(isset($_GET['from']) && $_GET['from'] === 'admin')}}") ? 'admin' : 'user';
    let opened = 0;

    function openForm() {
        opened = 1;
        update();
        setInterval(update, 4000);
        $("#myForm").fadeIn(700);
        $("#open-support").fadeOut(250);
        if (checkFocus())
            $('#messages').scrollTop(999999);
    }

    function closeForm() {
        opened = 0;
        setInterval(update, 10000);
        $("#myForm").fadeOut(250);
        $("#open-support").fadeIn(700);
    }

    $("form#myformSub").on("submit", function (event) {
        event.preventDefault();
        sendmsg();
        return false;
    });

    function delete_msg(id) {
        let params = {};
        params.id = "{{$fake->track_id}}";
        params.msg_id = id;
        params.page_from = page_from;
        $.post("/chat/delete_msg", params, function (res) {
            if (parseInt(res)) $(`.msg[data-msg-id="${id}"]`).remove();
        });
    }

    function checkFocus() {
        let container = $('#messages');
        let height = container.height();
        let scrollHeight = container[0].scrollHeight;
        let st = container.scrollTop();
        let sum = scrollHeight - height - 32;
        return (st < sum)
    }

    function update() {
        let params = {};
        let msg = $('#messages');
        params.id = "{{$fake->track_id}}";
        params.role = +(page_from === 'admin');
        if (opened === 1) {
            $.ajax({
                type: "GET",
                url: "/chat/ajax_chat",
                dataType: "html",
                data: params,
                cache: false
            }).done(function (response) {
                msg.html(response);
                let last = msg.find('div.msg').last();
                let viewed = last.data('viewed');
                let msg_id = last.data('msgId');
                let role = last.data('role');
                if (viewed === 0 && role !== params.role) {
                    last.attr('data-viewed', 1);
                    view(msg_id);
                }
            });
        } else {
            params.prop = 'check_new_message';
            $.ajax({
                type: "GET",
                url: "/chat/ajax_chat",
                data: params,
                cache: false
            }).done(function (response) {
                if (response === '1') openForm();
            });
        }
    }

    setInterval(update, 1000);

    function sendmsg() {
        let params = {};
        let msg = $('#message-text');
        params.id = "{{$fake->track_id}}";
        params.msg = $.trim(msg.val());
        params.role = +(page_from === 'admin');
        if (params.msg) $.ajax({
            type: "POST",
            url: "/chat/sendchat_message",
            cache: false,
            data: params
        }).done(function (res) {
            if (res === 'success') {
                msg.val('');
                msg.css("border-color", "#eaeced");
                update();
                setTimeout(function () {
                    $('#messages').scrollTop(999999);
                }, 1000);

            }
        });
        else msg.css("border-color", "red");

    }

    function view(msg_id) {
        let params = {};
        params.id = "{{$fake->track_id}}";
        params.msg = $('#message-text').val();
        params.role = +(page_from === 'admin');
        params.msg_id = msg_id;
        $.post("/chat/view", params).done(function () {
            if (checkFocus()) $('#messages').scrollTop(999999);
        });
    }

</script>


