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
                <p>
                    {{__('ui.workParagraph')}}
                </p>
                <a href="{{route('become.writer')}}" class="btn btn-success">{{__('ui.workButton')}}</a>
            
            </div>
        </div>
    </div>
    
</x-layout>