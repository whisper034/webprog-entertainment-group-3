<div class="container text-center" style="margin-top: 2rem;">
    <div class="row row-cols-{{ $gridRowCol }}">
        @foreach($artistGroupItems as $artistGroupKey => $artistGroupValue)
            <div class="col">
                <a href="/artist-group/{{ $artistGroupValue['group_name'] }}" style="text-decoration: none !important;">
                    <div class="text-center mb-5">
                        <div class="image-container text-center">
                            <div class="image-original text-center">
                                <img src="{{ asset($artistGroupValue['group_photo_url']) }}" alt="dream logo"
                                     class="" style="width: 27rem; object-fit: cover;">
                            </div>

                            <div class="image-overlay text-center">
                                <img src="{{ asset($artistGroupValue['group_photo_url_hovered']) }}" alt="dream logo"
                                     class="" style="width: 27rem;">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

<br><br><br><br>
