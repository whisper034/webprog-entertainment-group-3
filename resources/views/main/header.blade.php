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
                <a class="d-flex justify-content-center align-items-center nav-link" href="/album">
                    <span style="font-weight: bolder; font-size: 14pt;" class="navigation-a {{ $active == 'album' ? 'active' : 'inactive' }}">ALBUMS</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex justify-content-center align-items-center nav-link" href="/about">
                    <span style="font-weight: bolder; font-size: 14pt;" class="navigation-a {{ $active == 'about' ? 'active' : 'inactive' }}">ABOUT</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex justify-content-center align-items-center nav-link" href="/shop">
                    <span style="font-weight: bolder; font-size: 14pt;" class="navigation-a {{ $active == 'shop' ? 'active' : 'inactive' }}">SHOP</span>
                </a>
            </li>
            @if(Session::has('loginUser'))
                <a class="d-flex justify-content-center align-items-center nav-link user-profile-button" href="{{ Session::get('loginUser')->user_id }}/profile">
                    @if($active == 'user_profile')
                        <img src="{{ asset('/images/logo/profile-active.png') }}" alt="profile" style="width: 45%; height: 45%;">
                    @else
                        <img src="{{ asset('/images/logo/profile.png') }}" alt="profile" style="width: 45%; height: 45%;">
                    @endif
                </a>
            @else
                <form action="/login" method="get">
                    @csrf
                    <input type="text" name="is_logged_in" value="{{ Session::get('loginUser')->user_id ?? Crypt::encrypt('no') }}" style="display: none;">

                    <button type="submit" class="btn d-flex justify-content-center align-items-center nav-link login-button" style="border: solid black 1px; padding: 0.3rem 0.5rem; margin: 0 1rem;">
                        <img src="{{ asset('/images/logo/login.png') }}" alt="profile" style="width: 23%; height: 23%; object-fit: cover;">
                        <span class="ms-2">Login</span>
                    </button>
                </form>
            @endif
        </ul>
    </div>
</nav>
