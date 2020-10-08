{{--<div id="notifi-box">--}}
<a href="{{ url('/post/' . $notification->data['post']['id']) }}">
{{--<div class="notifi-box">--}}
{{--    <div class="notifi-item">--}}
        <h3>
                {{ $notification->data['user']['name'] }}
        </h3>
        <span>
            commented on your post <strong>{{ $notification->data['post']['caption'] }}</strong>
        </span>
{{--        </div>--}}
{{--</div>--}}
            </a>
{{--</div>--}}
