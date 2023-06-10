<div class="container" style="margin-top: 2rem;">
    @foreach($aboutItems as $aboutItemKey => $aboutItemValue)
        <div class="mb-5">
            <div class="d-flex align-items-center">
                @if($aboutItemValue['about_info_id'] == 1)
                    <img src="{{ asset('/images/logo/vision.png') }}" alt="vision" class=""
                         style="width: 4%;">
                @else
                    <img src="{{ asset('/images/logo/mission.png') }}" alt="vision" class=""
                         style="width: 4%;">
                @endif

                <div style="font-size: 16pt; font-weight: bold;" class="ms-3 text-uppercase">
                    <span>{{ $aboutItemValue['type'] }}</span>
                </div>
            </div>

            @php($descriptionSplit = explode("\n", $aboutItemValue['description']))
            <div class="mt-2 ms-2" style="font-size: 14pt;">
                @if($aboutItemValue['about_info_id'] == 1)
                    {{ $aboutItemValue['description'] }}
                @else
                    @php($number = 1)
                    <table style="width: 100%;">
                        <colgroup>
                            <col style="width: 2%;">
                            <col>
                        </colgroup>
                        <tbody>
                        @foreach($descriptionSplit as $descKey => $descValue)
                            <tr>
                                <td class="align-top">
                                    {{ $number++ }}.
                                </td>
                                <td style="text-align: justify;">
                                    {{ $descValue }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    @endforeach
</div>
