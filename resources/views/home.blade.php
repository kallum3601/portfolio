@extends('layouts.main-layout')

@include('partials.background')
@include('partials.nav')
@include('partials.mouse-display-box')
@include('partials.testimonial-display')
@include('partials.about-me', ['profileImage' => $profileImage])
@include('partials.portfolio', ['portfolioEntries' => $portfolioEntries])
@include('partials.references', ['references' => $references])
@include('partials.blog', ['posts'=> $posts, 'profileImage' => $profileImage])
@include('partials.notifications', ['notifications' => $notifications])

@section('content')

@endsection
