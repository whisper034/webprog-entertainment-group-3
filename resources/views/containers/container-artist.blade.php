<div class="container" style="margin-top: 3rem;">
    <div class="text-uppercase fw-bold mb-5" style="font-size: 24pt;">
        {{ $artistGroupName }}
    </div>
    @foreach($artistItems as $artistKey => $artistValue)
        <div class="d-flex mb-5">
            <div class="image-container text-center">
                <div class="image-original text-center">
                    <img src="{{ asset($artistValue->photo_url) }}" alt="{{ $artistValue->name }}"
                         class="" style="width: 10rem;">
                </div>

                <div class="image-overlay text-center">
                    <img src="{{ asset($artistValue->photo_url_hovered) }}" alt="{{ $artistValue->name }}"
                         class="" style="width: 10rem;">
                </div>
            </div>

            <div class="ms-5 p-3" style="border: solid black 2px; border-radius: 1rem; background-color: #f2bebe; width: 100%;">
                <div class="fw-bold" style="font-size: 14pt;">{{ $artistValue->name }} - {{ $artistValue->date_of_birth }}</div>

                @php($biodataSplit = explode("\n", $artistValue->biodata))
                @foreach($biodataSplit as $biodataSplitKey => $biodataSplitValue)
                    <div style="text-align: justify; font-size: 12pt;">{{ $biodataSplitValue }}</div>
                @endforeach
            </div>
        </div>
    @endforeach

    <br><br><br><br><br>
</div>
