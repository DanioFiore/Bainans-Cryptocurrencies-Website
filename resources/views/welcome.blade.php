<x-layout>
    {{-- title start --}}
    <x-slot name="title">Bainans - Home</x-slot>
    <div id="everything">
        <h1 class="text-center" id="homePageH1">
            B A I N A N S
        </h1>
        <h2 class="text-center" id="homePageH2Title">
            We believe in Cryptocurrencies.
        </h2>
        <h6 class="text-center" id="homePageH6Title">
            (Even in the Bear Market)
        </h6>
    </div>
    {{-- title end --}}

    {{-- carousel start --}}
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div id="carouselExampleCaptions" class="carousel slide w-50" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/btc2.png" class="d-block w-100" alt="bitcoin">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/eth.png" class="d-block w-100" alt="ethereum">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/terra.png" class="d-block w-100" alt="terra">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    
    {{-- carousel end --}}

</x-layout>