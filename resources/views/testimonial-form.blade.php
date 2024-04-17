@extends('layouts.form-layout')

@section('content')

<section id="testimonial-form-container">

    <form action="{{route('submit-testimonial')}}" method="POST" enctype="multipart/form-data">
        <img src="{{asset('images/logo/logo-full.png')}}" alt="404">
        @csrf
        <input type="text" name="name" placeholder="Name..." autofocus><br>
        <input type="text" name="company" placeholder="Company..."><br>
        <input type="text" name="job-title" placeholder="Job Title..."><br>
        <textarea name="testimonial" cols="30" rows="10" placeholder="Add your testimonial here..."></textarea><br>
        <select name="reaction">
            <option value="thumbs up">Thumbs Up</option>
            <option value="heart">Heart</option>
            <option value="smile">Smile</option>
        </select><br>
        <label for="photo">Please upload your photo below:</label>
        <input type="file" name="photo"><br>
        <input type="number" name="code" placeholder="Testimonial code...">
        @if ($errors->any())
            <div class="testimonial-reference-form-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit">Submit</button><br>
    </form>
    
</section>

@endsection