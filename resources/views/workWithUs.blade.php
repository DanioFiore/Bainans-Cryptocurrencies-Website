<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(session()->has('message'))
                    <div class="flex flex-row justify-center my-2 alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <h2>
                    {{__('ui.workTitle')}}
                </h2>
                <img src="/img/Remote-Work.webp" alt="" height="300" width="350">
                <p>
                    {{__('ui.workParagraph1')}}
                    <br>
                    {{__('ui.workParagraph2')}}
                </p>
                <a href="{{route('become.writer')}}" class="btn btn-success">{{__('ui.workButton')}}</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Our partner</h3>
            </div>
            <div class="col-12 bg-secondary p-3 d-flex justify-content-between partner">
                <img src="/img/okex.webp" alt="" height="150" width="300">
                <img src="/img/coinpayments.webp" alt="" height="150" width="300">
                <img src="/img/emurgo.webp" alt="" height="150" width="300">
            </div>
        </div>
    </div>
    
</x-layout>