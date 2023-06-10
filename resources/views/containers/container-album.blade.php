<div class="container text-center" style="margin-top: 3rem;">
    <div class="row row-cols-{{ $gridRowCol }}">
        @foreach($albumItems as $albumKey => $albumValue)
            <div class="col" style="">
                <a href="/album/{{ $albumValue->album_id }}" style="text-decoration: none !important;">
                    <div class="text-center mb-5">
                        <div class="image-container text-center">
                            <div class="image-original text-center">
                                <img src="{{ asset($albumValue->artist_album_photo_url) }}" alt="{{ $albumValue->group_name }} album"
                                     class="" style="width: 27rem;">
                            </div>

                            <div class="image-overlay text-center">
                                <img src="{{ asset($albumValue->artist_album_photo_url_hovered) }}" alt="{{ $albumValue->group_name }} album"
                                     class="" style="width: 27rem;">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

<br><br><br><br><br>
