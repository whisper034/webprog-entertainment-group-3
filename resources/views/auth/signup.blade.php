<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
</head>
<body>
<div class="d-flex align-items-center" style="justify-content: space-between; margin: 3rem 7rem;">
    <button class="btn text-decoration-none back-button" onclick="history.back()" style="">
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
    </button>

    <div class="text-center d-flex justify-content-center align-items-center">
        <form action="/login" method="get">
            @csrf
            <input type="text" name="is_logged_in" value="{{ Session::get('loginUser')->user_id ?? Crypt::encrypt('no') }}" style="display: none;">

            <button type="submit" class="btn signup-page-button shadow d-flex justify-content-center align-items-center">
                <img src="{{ asset('/images/logo/login-red.png') }}" alt="profile" style="width: 23%; height: 23%; object-fit: cover;">
                <span class="ms-2">Login</span>
            </button>
        </form>
    </div>
</div>

<div class="d-flex justify-content-center align-items-center" style="min-height: 79vh;">
    <form action="/sign-up" method="post" style="margin-top: -2rem;">
        @csrf
        <div style="font-size: 30pt;" class="fw-bold text-center">
            Create Your New Account!
        </div>

        <div style="font-size: 16pt;" class="fw-bold text-center mb-lg-5">
            Join Us and Discover More About K-POP
        </div>

        <div style="background-color: #ffdadd; border-radius: 1rem;" class="p-lg-5 shadow">
            <div class="mb-lg-3">
                <label for="name" class="mb-1 fw-bold" style="font-size: 14pt;">Name</label>
                <input class="form-control shadow" type="text" id="name" name="name" placeholder="Input your name here..." required autofocus value="{{ $oldValues['name'] ?? null }}">
            </div>

            <div class="mb-lg-3">
                <label for="gender" class="mb-1 fw-bold" style="font-size: 14pt;">Gender</label>
                <br>
                @if(empty($oldValues))
                    <input type="radio" name="gender" class="form-check-input" value="M" required>&nbsp;Male
                    <input type="radio" name="gender" class="form-check-input ms-3" value="F" required>&nbsp;Female
                @elseif($oldValues['gender'] == 'M')
                    <input type="radio" name="gender" class="form-check-input" value="M" required checked>&nbsp;Male
                    <input type="radio" name="gender" class="form-check-input ms-3" value="F" required>&nbsp;Female
                @elseif($oldValues['gender'] == 'F')
                    <input type="radio" name="gender" class="form-check-input" value="M" required>&nbsp;Male
                    <input type="radio" name="gender" class="form-check-input ms-3" value="F" required checked>&nbsp;Female
                @endif
            </div>

            <div class="mb-lg-3">
                <label for="email" class="mb-1 fw-bold" style="font-size: 14pt;">Email</label>
                <input class="form-control shadow" type="text" id="email" name="email" value="{{ $oldValues['email'] ?? null }}" placeholder="name@example.com" required>
                @if($validateUserInput == 'wrong_email_format')
                    <div class="text-danger mt-1" style="font-size: 10pt;">
                        Wrong email format!
                    </div>
                @endif
            </div>

            <div class="mb-lg-3">
                <label for="phone_number" class="mb-1 fw-bold" style="font-size: 14pt;">Phone Number</label>
                <input class="form-control shadow" type="text" id="phone_number" name="phone_number" value="{{ $oldValues['phone_number'] ?? null }}" placeholder="Input your phone number here..." required>
            </div>

            <div class="mb-lg-3">
                <label for="password" class="mb-1 fw-bold" style="font-size: 14pt;">Password</label>
                <input class="form-control shadow" type="password" id="password" name="password" placeholder="*********" required>
            </div>

            <div>
                <label for="confirm_password" class="mb-1 fw-bold" style="font-size: 14pt;">Confirm Password</label>
                <input class="form-control shadow" type="password" id="confirm_password" name="confirm_password" placeholder="*********" required>
            </div>

            @if($validateUserInput == 'password_not_match')
                <div class="p-2 mt-lg-5 text-center text-danger shadow" style="background-color: #ffaeae; border-radius: 1rem; font-size: 12pt; margin: 0 5rem;">
                    Password Does Not Match!
                </div>
            @endif

            <div class="text-center mt-lg-5">
                <button type="submit" class="btn btn-lg login-page-button shadow">
                    Sign Up
                </button>
            </div>
        </div>
    </form>
</div>

<br><br><br><br><br><br><br>

@include('main.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
