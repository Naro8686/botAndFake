@foreach($messages as $message)
    <div class="msg {{((int)$message->role === (int)$is_admin) ? 'right-msg' : 'left-msg'}}"
         data-msg-id="{{$message->id}}" data-role="{{$message->role}}"
         data-viewed="{{$message->viewed}}">
        <div class="msg-img"
             style="background-image: url('/chat/assets/images/avatar.png')"></div>
        <div class="msg-bubble">
            <div class="msg-info">
                @if($is_admin)
                    <div class="msg-info-name">
                        <a href='#' class="del-btn"
                           onclick='delete_msg("{{$message->id}}")'>&times;</a>
                    </div>
                @endif

                <div class="msg-info-time">{{date('H:i', strtotime($message->created_at))}}</div>
            </div>
            <div class="msg-text">{{$message->message}}</div>
        </div>
    </div>
@endforeach