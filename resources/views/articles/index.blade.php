<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{__('ui.indexTitle')}}</h2>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4 my-3 mb-3">
                    <div class="card bg-dark border border-warning">
                        <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$article->title}}
                            </h5>
                            <a class="noStyleA" href="{{route('categoryShow', ['category'=>$article->category])}}">
                                {{__('ui.indexArticleCategory')}} {{$article->category->name}}
                            </a>
                            <p class="text-white">
                                {{__('ui.indexArticleDate')}} {{$article->created_at->format('d/m/Y')}}
                            </p>
                            <a href="{{route('articles.show', compact('article'))}}" class="btn btn-outline-success">
                                {{__('ui.indexArticleReadButton')}}
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-black py-3">
                        <p class="lead">{{__('ui.indexNoArticle')}}</p>
                    </div>
                </div>
            @endforelse
            {{$articles->links()}}
        </div>
    </div>

</x-layout>