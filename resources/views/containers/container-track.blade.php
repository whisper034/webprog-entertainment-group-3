<div class="container" style="margin-top: 3rem;">
    <div class="text-uppercase fw-bold mb-5" style="font-size: 24pt;">
        {{ $artistGroupName }}
    </div>

    <div class="text-center mb-4">
        <div>
            <img src="{{ asset($albumItems->album_photo_url) }}" alt="{{ $albumItems->group_name }} album"
                  class="" style="width: 70%;">
        </div>

        <div>
            <a href="{{ $albumItems->artist_group_album_url }}" target="_blank">
                <img src="{{ asset($albumItems->artist_group_photo_url) }}" alt="{{ $albumItems->group_name }}"
                     class="" style="width: 70%;">
            </a>
        </div>
    </div>

    <div class="text-center p-3" style="border: solid black 2px; border-radius: 1rem; background-color: #f2bebe; width: 100%;">
        @php($albumInfoSplit = explode("\n", $albumItems->album_info))
        @foreach($albumInfoSplit as $albumInfoKey => $albumInfoValue)
            <div class="mb-3" style="font-size: 14pt;">
                {{ $albumInfoValue }}
            </div>
        @endforeach

        <br><br>

        <div class="text-uppercase fw-bold mb-5" style="font-size: 20pt;">
            TRACK LIST
        </div>

        <div class="row row-cols-{{ $gridRowColTrack }}">
            @foreach($albumItems->track_list as $trackKey => $trackValue)
                <div class="col text-center mb-5" style="padding: 0 3rem;">
                    <div class="text-uppercase fw-bold mb-3" style="font-size: 16pt;">{{ $trackKey + 1 }}. {{ $trackValue->title }}</div>

                    @if(isset($trackValue->composer))
                        <div>Composed by {{ $trackValue->composer }}</div>
                    @endif

                    @if(isset($trackValue->lyrics_by))
                        <div>Lyrics by {{ $trackValue->lyrics_by }}</div>
                    @endif

                    @if(isset($trackValue->arranger))
                        <div>Arranged by {{ $trackValue->arranger }}</div>
                    @endif

                    @if(isset($trackValue->producer))
                        <div>Produced by {{ $trackValue->producer }}</div>
                    @endif

                    @if(isset($trackValue->co_producer))
                        <div>Co-Produced by {{ $trackValue->co_producer }}</div>
                    @endif

                    @if(isset($trackValue->ar_director))
                        <div>A&R Director - {{ $trackValue->ar_director }}</div>
                    @endif

                    @if(isset($trackValue->director))
                        <div>Director {{ $trackValue->director }}</div>
                    @endif

                    @if(isset($trackValue->additional_data))
                        <div>{{ $trackValue->additional_data }}</div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <br><br><br><br><br><br><br>
</div>
