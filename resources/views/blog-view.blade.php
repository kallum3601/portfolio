@extends('layouts.blog-view-layout')

@section('content')

<section id="blog-view-container">

    <div class="blog-view-image-container">
        <img src="{{Storage::url($post->image_path)}}" alt="404">
    </div>

    <div class="blog-view-text-content-container">

        <div class="blog-view-title-type">
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
    
        <p class="blog-view-description">{!!$post->body!!}</p>
    
        <div class="blog-view-pp-date">
            @if($profileImage)
                <img src="{{Storage::url($profileImage->image_path)}}" alt="404">
            @else
                <img src="{{asset('images/logo/logo-full.png')}}" alt="404">
            @endif
            
            <h5>{{$post->created_at->format('d-m-Y')}}</h5>
        </div>

    </div>

</section>

@endsection