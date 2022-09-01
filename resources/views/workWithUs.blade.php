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
                    You want to join our team?
                </h2>
                <p>
                    We're excited to meet you. <br>
                    Click on this button to send a request to become a writer.
                </p>
                <a href="{{route('become.writer')}}" class="btn btn-success">Become a writer!</a>
            
            </div>
        </div>
    </div>
    
</x-layout>