<x-layout>

{{-- title start --}}
<div id="titleCryptocurrenciesPage">
    <div class="container mb-5" style="margin-top: 70px">
        <div class="row">
            <div class="col-12">
                <h2 id="cryptocurrenciesPageH2" class="text-center">{{__('ui.cryptoPageTitle')}}</h2>
                <h3 class="text-center">{{__('ui.cryptoPageSubtitle')}}</h3>
            </div>
        </div>
    </div>
</div>

{{-- title end --}}

{{-- Paragraph start --}}
<div class="container mb-3 cryptoPageParagraph">
    <div class="row">
        <div class="col-6">
            <span class="text-white">{{__('ui.cryptoPageParagraph1')}}</span>
            <br>
            <span class="text-white">{{__('ui.cryptoPageParagraph2')}}</span>
        </div>
        <div class="col-6">
            <img src="/img/busd-logo.webp" alt="" class="cryptoPageCoinLogo">
            <img src="/img/bnb-logo.webp" alt="" class="cryptoPageCoinLogo">
            <img src="/img/ethereum-logo-2.webp" alt="" class="cryptoPageCoinLogo">
        </div>
    </div>
</div>
{{-- paragraph end --}}

{{-- crypto table start --}}
<div id="tableCryptocurrenciesContainer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table id="cryptoTableAll" class="table">
                    <thead>
                        <tr>
                            <th class="text-warning" scope="col">{{__('ui.homeTableRowName')}}</th>
                            <th class="text-warning" scope="col">{{__('ui.homeTableRowPrice')}}</th>
                            <th class="text-warning" scope="col">{{__('ui.homeTableRowVwap')}}</th>
                            <th class="text-warning" scope="col">{{__('ui.homeTableRowRank')}}</th>
                            <th class="text-warning" scope="col">{{__('ui.homeTableRowSymbol')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cryptos as $crypto)
                            <tr>
                                <td class="text-white">
                                    {{ $crypto->name }};
                                </td>
                                <td class="text-white">
                                    {{ number_format($crypto->priceUsd, 2)}}
                                </td>
                                <td class="text-white">
                                    {{ number_format($crypto->vwap24Hr, 2) }}
                                </td>
                                <td class="text-white">
                                    {{ $crypto->rank }}
                                </td>
                                <td class="text-white">
                                    {{ $crypto->symbol }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>


</x-layout>
