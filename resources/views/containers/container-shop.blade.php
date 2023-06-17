<div class="container" style="margin-top: 3rem;">
    <div class="row mb-lg-5">
        <div class="col-md-3">
            <span class="fw-bold" style="font-size: 18pt;">
                Our Products
            </span>

            <br>

            <form action="/shop" method="get">
                @csrf
                <div class="input-group mt-1">
                    <input class="form-control border-end-0 border" type="search" aria-label="Search" id="example-search-input" name="search_by" placeholder="Search our products..." value="{{ $searchBy ?? null }}">
                    <span class="input-group-append">
                        <button class="btn btn-outline border-start-0 border-bottom-0 border ms-n5 search-button" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    @if(!empty($searchBy) && $productItems->isEmpty())
        <div class="" style="font-size: 14pt;">Item(s) not found.</div>
    @else
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($productItems as $productItemKey => $productItemValue)
                <div class="col">
                    <div class="card h-100 me-5 clickable" data-bs-toggle="modal" data-bs-target="#product-{{ $productItemValue->product_id }}">
                        <img src="{{ asset($productItemValue->product_photo_url) }}" class="card-img-top" alt="{{ $productItemValue->product_name }}">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $productItemValue->product_name }}</h5>
                            <div class="card-text text-end fw-normal" style="font-size: 14pt;">{{ $productItemValue->ind_price }}</div>
                        </div>
                    </div>
                </div>
                @php($descSplit = explode("\n", $productItemValue->product_description))

                {{--            modal ini digunakan untuk pop up--}}
                <div class="modal fade" id="product-{{ $productItemValue->product_id }}" tabindex="{{ $productItemValue->product_id }}" aria-labelledby="{{ $productItemValue->product_name }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content" style="background-color: #ffc9c9;">
                            <form method="post" action="/buy">
                                @csrf
                                <div class="modal-body">
                                    <table style="width: 100%;">
                                        <colgroup>
                                            <col>
                                            <col style="width: 60%;">
                                        </colgroup>
                                        <tbody>
                                        <tr>
                                            <td rowspan="4" style="vertical-align: top;" class="pt-3 pb-3 ps-3 pe-4">
                                                <img src="{{ asset($productItemValue->product_photo_url) }}" class="card-img-top" alt="{{ $productItemValue->product_name }}" style="width: 100%;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold fs-3">{{ $productItemValue->product_name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fs-4 fw-bold" style="color: #707070;">{{ $productItemValue->ind_price }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold" style="font-size: 14pt;">Description:</span>
                                                @foreach($descSplit as $descSplitKey => $descSplitValue)
                                                    @if(empty($descSplitValue))
                                                        <br>
                                                    @else
                                                        <div>{{ $descSplitValue }}</div>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="d-none">
                                        <input type="text" name="user_id" value="{{ Session::get('loginUser')->user_id ?? null }}" style="">
                                        <input type="text" name="product_id" value="{{ $productItemValue->product_id }}" style="">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="NO">Cancel</button>
                                    @if(Session::has('loginUser'))
                                        <button type="submit" class="btn btn-modal" value="BUY">Buy Now</button>
                                    @else
                                        <div class="btn btn-modal" data-bs-target="#isNotLoggedIn" data-bs-toggle="modal" data-bs-dismiss="modal">Buy Now</div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="isNotLoggedIn" aria-hidden="true" aria-labelledby="user_not_logged_in" tabindex="-1">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content" style="background-color: #515151;">
                            <div class="modal-body text-center">
                                <img src="{{ asset('/images/logo/warning.png') }}" alt="warning">
                                <div class="fs-4 mt-5" style="color: #dddddd;">
                                    You need to have an account first! Sign up now!
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <form action="/sign-up" method="get">
                                    @csrf
                                    <input type="text" name="is_logged_in" value="{{ Session::get('loginUser')->user_id ?? Crypt::encrypt('no') }}" style="display: none;">

                                    <button class="btn btn-modal" data-bs-dismiss="modal">Create Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <div class="d-flex justify-content-center mt-5">
        {{ $productItems->withQueryString()->links() }}
    </div>

    {{--    br di bawah itu biar footernya gk nabrak, kalau mau nambah div wajib di atas br ini--}}
    <br><br><br><br><br><br>
</div>
