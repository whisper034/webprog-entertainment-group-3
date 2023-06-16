<div class="container-fluid">
    <div style="background-color: #ffdadd; margin: 3rem 4rem; padding: 2rem 4rem; border-radius: 1rem;">
        <div class="text-center fw-bold" style="font-size: 22pt;">
            User Profile
        </div>

        <br>

        <div class="text-center">
            @if(!empty(Session::get('loginUser')->user_photo_url))
                <img src="{{ asset(Session::get('loginUser')->user_photo_url) }}" alt="profile" style="width: 10rem; height: 10rem; border-radius: 10rem;" class="shadow">
            @else
                No Photo
            @endif
        </div>

        <br><br>

        <div style="background-color: #ffbcc2; margin: 0 7rem; border-radius: 1rem; padding: 1rem 3rem;" class="shadow">
            <table class="table table-borderless" style="width: 100%;">
                <tbody>
                <tr>
                    <th>Name</th>
                    {{-- ubah dibawah sini --}}
                    <th>{{ Session::get('loginUser')->name }}</th>
                </tr>

                <tr>
                    <th>Phone Number</th>
                    {{-- ubah dibawah sini --}}
                    <th>{{ Session::get('loginUser')->phone_number }}</th>
                </tr>

                <tr>
                    <th>Gender</th>
                    {{-- ubah dibawah sini --}}
                    <th>{{ Session::get('loginUser')->gender == 'M' ? 'Male' : 'Female' }}</th>
                </tr>

                <tr>
                    <th>Email</th>
                    {{-- ubah dibawah sini --}}
                    <th>{{ Session::get('loginUser')->email }}</th>
                </tr>
                </tbody>
            </table>
        </div>

        <form action="/logout" method="post">
            @csrf
            <div class="text-center mt-lg-5 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-lg login-page-button shadow d-flex justify-content-center align-items-center">
                    <img src="{{ asset('/images/logo/logout.png') }}" alt="profile" style="width: 23%; height: 23%; object-fit: cover;">
                    <span class="ms-1 text-white">Log Out</span>
                </button>
            </div>
        </form>
    </div>

{{--    br di bawah itu biar footernya gk nabrak, kalau mau nambah div wajib di atas br ini--}}
    <br><br><br><br><br>
</div>
