<nav class="navbar navbar-light navbar-expand-md d-flex justify-content-between align-items-center" style="background-color: #ffc9c9; margin: 0; padding: 0;">
    <div class="text-center">
        <img src="{{ asset('/images/logo/dream-logo.png') }}" alt="dream logo"
             class="" style="width: 50%;">
    </div>

    <div class="text-end navigation-bar">
        <ul class="nav d-flex justify-content-evenly align-items-center container-fluid" style="">
            <li class="nav-item">
                <a class="d-flex justify-content-center align-items-center nav-link" href="/">
                    <span style="font-weight: bolder; font-size: 14pt;" class="navigation-a {{ $active == 'home' ? 'active' : 'inactive' }}">HOME</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex justify-content-center align-items-center nav-link" href="/artist-group">
                    <span style="font-weight: bolder; font-size: 14pt; " class="navigation-a {{ $active == 'artist_group' ? 'active' : 'inactive' }}">ARTISTS</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex justify-content-center align-items-center nav-link" href="#">
                    <span style="font-weight: bolder; font-size: 14pt;" class="navigation-a {{ $active == 'albums' ? 'active' : 'inactive' }}">ALBUMS</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex justify-content-center align-items-center nav-link" href="/about">
                    <span style="font-weight: bolder; font-size: 14pt;" class="navigation-a {{ $active == 'about' ? 'active' : 'inactive' }}">ABOUT</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
