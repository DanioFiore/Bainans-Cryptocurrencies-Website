<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5">
                    {{$category->name}}
                </h2>
                @forelse ($category->articles as $article)
                    <div class="col-12 col-md-4 my-3 my-md-0">
                        <div class="card bg-dark border border-warning">
                            <img src="{{!$article->images()->get()->isEmpty() ? Storage::url($article->images()->first()->path) : 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$article->title}}
                                </h5>
                                <p class="text-white">
                                    {{__('ui.cardDate')}} {{$article->created_at->format('d/m/Y')}}
                                </p>
                                <p class="text-white">{{__('ui.categoryShowWriterName')}} {{$article->user->name ?? ''}}</p>
                                <a href="{{route('articles.show', compact('article'))}}" class="btn btn-outline-success">
                                    {{__('ui.cardReadMoreButton')}}
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p>{{__('ui.categoryShowNoArticle')}}</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

</x-layout>