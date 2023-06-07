<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
@include('main.header')

<div style="" class="">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1" style="background-color: white;"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2" style="background-color: white;"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3" style="background-color: white;"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4" style="background-color: white;"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/images/home/slide_1.png') }}" alt="slide 1" class=""
                     style="width: 100vw; height: 100vh; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/images/home/slide_2.png') }}" alt="slide 2" class=""
                     style="width: 100vw; height: 100vh; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/images/home/slide_3.png') }}" alt="slide 3" class=""
                     style="width: 100vw; height: 100vh; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/images/home/slide_4.png') }}" alt="slide 4" class=""
                     style="width: 100vw; height: 100vh; object-fit: cover;">
            </div>
        </div>
{{--        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"--}}
{{--                data-bs-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Previous</span>--}}
{{--        </button>--}}
{{--        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"--}}
{{--                data-bs-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Next</span>--}}
{{--        </button>--}}
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
