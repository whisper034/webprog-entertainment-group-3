<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
<div class="d-flex justify-content-center align-items-center flex-column" style="min-height: 79vh;">
    <div style="font-size: 30pt; margin-top: 2rem;" class="fw-bold text-center">
        @if($active == 'sign-up')
            Create Your New Account!
        @else
            Thank You for Your Purchase!
        @endif
    </div>

    <div style="font-size: 16pt;" class="fw-bold text-center mb-lg-5">
        @if($active == 'sign-up')
            Join Us and Discover More About K-POP
        @else

        @endif
    </div>

    <div style="background-color: #ffdadd; border-radius: 1rem;" class="p-lg-5 shadow text-center">
        <div class="mb-lg-5">
            <img src="{{ asset('/images/logo/signup-success.png') }}" alt="profile" style="width: 40%; object-fit: cover;">
        </div>

        <div style="font-size: 22pt;" class="mb-lg-5">
            @if($active == 'sign-up')
                You have successfully sign up.
            @else
                You have successfully bought the item.
            @endif
        </div>

        <div class="text-center d-flex justify-content-center align-items-center">
            @if($active == 'sign-up')
                <form action="/login" method="get">
                    @csrf
                    <input type="text" name="is_logged_in" value="{{ Session::get('loginUser')->user_id ?? Crypt::encrypt('no') }}" style="display: none;">

                    <button type="submit" class="btn btn-lg login-page-button shadow">
                        Log In
                    </button>
                </form>
            @else
                <button onclick="history.back()" type="submit" class="btn btn-lg login-page-button shadow me-4">
                    Back to Shop
                </button>

                <form action="/{{ Session::get('loginUser')->user_id ?? null }}/profile" method="get">
                    @csrf
                    <button type="submit" class="btn btn-lg login-page-button shadow">
                        View History
                    </button>
                </form>
            @endif
        </div>
    </div>
</div>

<br><br><br><br><br><br><br>

@include('main.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
