@extends('layouts.form-layout')

@section('content')

<section id="reference-form-container">

    <form action="{{route('submit-reference')}}" method="POST" enctype="multipart/form-data">
        <img src="{{asset('images/logo/logo-full.png')}}" alt="404">
        @csrf
        <input type="text" name="fullname" placeholder="Fullname..." autofocus><br>
        <input type="text" name="company" placeholder="Company"><br>
        <input type="text" name="job-title" placeholder="Job Title"><br>
        <textarea name="reference" cols="30" rows="10" placeholder="Add your reference here..."></textarea><br>
        <input type="email" name="email" placeholder="Email Address..."><br>
        <input type="text" name="phone" placeholder="Phone Number (Optional)..."><br>
        <label for="signature">Please upload your signature below:</label>
        <input type="file" name="signature"><br>
        <input type="number" name="code" placeholder="Reference code..."><br>
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