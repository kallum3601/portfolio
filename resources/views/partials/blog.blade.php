@section('blog')

<section id="blog-all-container" section-name="blog-all-container">

    <div id="blog-entries">

        @foreach($posts as $post)
        <a  class="blog-entry" href="/blog/{{$post->slug}}"><div>

            <div class="blog-entry-image">
                <img src="{{Storage::url($post->image_path)}}" alt="404">
            </div>
    
            <div class="blog-title-type">
                <h3>{{$post->title}}</h3>

                @if($post->type === 'Personal')
                    <h5 class="status-orange">{{$post->type}}</h5>
                @elseif($post->type === 'Investing')
                    <h5 class="status-yellow">{{$post->type}}</h5>
                @elseif($post->type === 'Project')
                    <h5 class="status-red">{{$post->type}}</h5>
                @elseif($post->type === 'Travel')
                    <h5 class="status-green">{{$post->type}}</h5>
                @elseif($post->type === 'Music')
                    <h5 class="status-orange">{{$post->type}}</h5>
                @endif
            </div>
            
            <p class="blog-description">{!!$post->body!!}</p>
    
            <div class="blog-pp-date">
                @if($profileImage)
                    <img id="about-me-profile-image" src="{{Storage::url($profileImage->image_path)}}" alt="404">
                @else
                    <img src="{{asset('images/logo/logo-full.png')}}" alt="404">
                @endif
                
                <h5>{{$post->created_at->format('d-m-Y')}}</h5>
            </div>
        </div></a>
        @endforeach

        <div class="pagination">
            {{ $posts->links() }}
        </div>

    </div>

</section>

@endsection