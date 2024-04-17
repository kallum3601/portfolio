@section('notifications')

<section id="notifications-container" section-name="notifications-container">

    <div id="notifications-entries">

        @if($notifications->isEmpty())
            <div class="notifications-entry">
                <img src="{{asset('images/notifications/exclamation.png')}}" alt="404">
                <p>No Notifications Yet!</p>
            </div>
        @endif

        @foreach($notifications as $notification)

            <div class="notifications-entry">
                @if($notification->type === 'holiday')
                    <img src="{{asset('images/notifications/holiday.png')}}" alt="404">
                @elseif($notification->type === 'alert')
                    <img src="{{asset('images/notifications/exclamation.png')}}" alt="404">
                @elseif($notification->type === 'blog-entry')
                    <img src="{{asset('images/notifications/blog.png')}}" alt="404">
                @endif

                <p>{{$notification->notification}}</p>
            </div>

        @endforeach

    </div>

</section>

@endsection