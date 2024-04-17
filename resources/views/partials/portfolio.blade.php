@section('portfolio')

<section id="portfolio-container" section-name="portfolio-container">

    <table>
        <thead>
            <tr>
                <th>Video</th>
                <th>Title</th>
                <th>Description</th>
                <th>Main Focus</th>
                <th>Status</th>
                <th>Build</th>
                <th>GitHub Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach($portfolioEntries as $entry)
            <tr>
                <td class="portfolio-video-column"><video src="{{ Storage::url($entry->video_path) }}"></video></td>
                <td>{{$entry->title}}</td>
                <td style="width: 50%;" class="portfolio-description-column">{!!$entry->description!!}<br><a href="{{$entry->blog}}">Blog Entry</a></td>
                <td>{{$entry->focus}}</td>

                @if($entry->status === 'Conceptual')
                    <td><span class="status-orange">{{$entry->status}}</span></td>
                @elseif($entry->status === 'In Progress')
                    <td><span class="status-yellow">{{$entry->status}}</span></td>
                @elseif($entry->status === 'Completed')
                    <td><span class="status-blue">{{$entry->status}}</span></td>
                @elseif($entry->status === 'Live')
                    <td><span class="status-green">{{$entry->status}}</span></td>
                @elseif($entry->status === 'Old')
                    <td><span class="status-red">{{$entry->status}}</span></td>
                @endif

                
                <td>{{$entry->build}}</td>
                @if(isset($entry->link))
                    <td><a href="{{$entry->link}}">Github Link</a></td>
                @else
                    <td><p>N/A</p></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

</section>

@endsection