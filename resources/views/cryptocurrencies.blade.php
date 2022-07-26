<x-layout>

{{-- title start --}}
<div id="titleCryptocurrenciesPage">
    <div class="container mb-5" style="margin-top: 70px">
        <div class="row">
            <div class="col-12">
                <h2 id="cryptocurrenciesPageH2" class="text-center">The BEST Cryptocurrencies</h2>
                <h3 class="text-center">- All in our Exchange -</h3>
            </div>
        </div>
    </div>
</div>

{{-- title end --}}

{{-- crypto table start --}}
<div id="tableCryptocurrenciesContainer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table id="cryptoTableAll" class="table">
                    <thead>
                        <tr>
                            <th class="text-warning" scope="col">Name</th>
                            <th class="text-warning" scope="col">Price</th>
                            <th class="text-warning" scope="col">Vwap24h</th>
                            <th class="text-warning" scope="col">Rank</th>
                            <th class="text-warning" scope="col">Symbol</th>
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
                <button id="showMoreCryptoButton" class="btn btn-warning">Show more</button>
            </div>
        </div>
    </div>
    
</div>


</x-layout>
