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

        <div class="text-center mt-lg-5 d-flex justify-content-center align-items-center">
            <div class="btn btn-lg login-page-button shadow d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#log_out_confirmation">
                <img src="{{ asset('/images/logo/logout.png') }}" alt="profile" style="width: 23%; height: 23%; object-fit: cover;">
                <span class="ms-1 text-white">Log Out</span>
            </div>
        </div>

        <div class="modal fade" id="log_out_confirmation" aria-hidden="true" aria-labelledby="log_out_confirmation" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content" style="background-color: #515151;">
                    <div class="modal-body text-center">
                        <img src="{{ asset('/images/logo/warning.png') }}" alt="warning">
                        <div class="fs-4 mt-5" style="color: #dddddd;">
                            Are you sure you want to log out?
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="NO">Cancel</button>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="btn btn-secondary shadow log-out-button">
                                <span class="text-white">Log Out</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #ffdadd; margin: 3rem 4rem; padding: 2rem 4rem; border-radius: 1rem;">
        <div class="text-center fw-bold" style="font-size: 22pt;">
            Transaction History
        </div>

        <br>

        <div class="ms-5 me-5">
            <div style="color: #ff4f5d; font-size: 16pt;" class="mb-2">
                Recent Transactions
            </div>

            @if($transactionHistory->isEmpty())
                <div style="font-size: 14pt;">
                    No transactions made.
                </div>
            @else
                @php($counter = 0)
                @foreach($transactionHistory as $transactionHistoryKey => $transactionValue)
                    @if($counter == 3)
                        @break
                    @endif

                    @php($counter++)

                    <div style="background-color: #ffbcc2; border-radius: 1rem;" class="mb-lg-4 p-3 shadow">
                        <table style="width: 100%;" class="transaction-history-table">
                            <colgroup>
                                <col style="width: 50%;">
                                <col>
                            </colgroup>
                            <tbody>
                            <tr>
                                <td>Product</td>
                                <td style="text-align: right;">{{ $transactionValue['product_name'] }}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td style="text-align: right;">{{ $transactionValue['ind_price'] }}</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td style="text-align: right;">1</td>
                            </tr>
                            <tr>
                                <td>Total Price</td>
                                <td style="text-align: right;">{{ $transactionValue['ind_price'] }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            @endif

            @if(sizeof($transactionHistory) > 3)
                <div data-bs-toggle="modal" data-bs-target="#tr-modal" class="text-center button-see-all" style="">
                    See All
                </div>
            @endif
        </div>

        <div class="modal fade" id="tr-modal" aria-labelledby="transaction_history" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="transaction_history">All Transactions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        @foreach($transactionHistory as $transactionHistoryKey => $transactionValue)
                            <div style="background-color: #ffbcc2; border-radius: 1rem;" class="mb-lg-4 p-3 ms-4 me-4 shadow">
                                <table style="width: 100%;" class="">
                                    <colgroup>
                                        <col>
                                        <col style="width: 30%;">
                                        <col style="width: 2%;">
                                        <col style="width: 40%;">
                                    </colgroup>
                                    <tbody>
                                    <tr>
                                        <td colspan="4" class="fw-bold pb-2 text-center">
                                            {{ $transactionValue['product_name'] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="pe-3">
                                            <img src="{{ asset($transactionValue['product_photo_url']) }}" alt="{{ $transactionValue['product_name'] }}" style="width: 100%;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Price</td>
                                        <td>:</td>
                                        <td>{{ $transactionValue['ind_price'] }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Quantity</td>
                                        <td>:</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Total Price</td>
                                        <td>:</td>
                                        <td>{{ $transactionValue['ind_price'] }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold" style="">Bought</td>
                                        <td style="">:</td>
                                        <td>{{ $transactionValue['transaction_date_formatted'] }}, {{ $transactionValue['transaction_time'] }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="NO">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    br di bawah itu biar footernya gk nabrak, kalau mau nambah div wajib di atas br ini--}}
    <br><br><br><br><br>
</div>
