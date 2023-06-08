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
    @if($active == 'about')
        @include('containers.container-about')
    @elseif($active == 'artist_group')
        @include('containers.container-artist-group')
    @else
        @include('containers.container-home')
    @endif
</div>

@if($active != 'home')
    @include('main.footer')
@endif
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
