@section('references')

<section id="references-container" section-name="references-container">

    <div id="references-left-arrow">
        <img class="reference-arrow" src="{{asset('images/references/left-arrow.png')}}" alt="404">
    </div>

    <div class="reference-container">

        @foreach($references as $reference)

        <div class="reference">
            <h5>{{$reference->fullname}} | {{$reference->company}} | {{$reference->job_title}}</h5>
            <p>{!!$reference->reference!!}</p>
            <div class="reference-sign-off">
                <p>Kind Regards,</p>
                <p>{{$reference->fullname}}</p>
                <img class="reference-signature" src="{{Storage::url($reference->image_path)}}" alt="404">
            </div>
            @if(isset($reference->phone))
            <h5 class="reference-contact">{{$reference->phone}} | {{$reference->email}}</h5>
            @else
            <h5 class="reference-contact">{{$reference->email}}</h5>
            @endif
        </div>

        @endforeach
    </div>

    <div id="references-right-arrow">
        <img class="reference-arrow" src="{{asset('images/references/right-arrow.png')}}" alt="404">
    </div>
    
</section>

@endsection