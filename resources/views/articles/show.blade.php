<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>
                    {{$article->name}}
                </h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="https://picsum.photos/id/27/1200/200" class="img-fluid" alt="">
            </div>
            <div class="col-12">
                <p>
                    {{$article->body}}
                </p>
                <p>
                    Published: {{$article->created_at->format('d/m/Y')}}
                </p>
                <p>
                    {{$article->user->name ?? ''}}
                </p>
            </div>
        </div>
    </div>

</x-layout>