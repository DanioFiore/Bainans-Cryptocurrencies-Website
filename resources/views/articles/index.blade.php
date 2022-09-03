<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>All our Articles</h2>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @forelse ($articles as $article)
                        <div class="col-12 col-md-4 my-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{!$article->images()->get()->isEmpty() ? Storage::url($article->images()->first()->path) : 'https://picsum.photos/200'}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{$article->title}}
                                    </h5>
                                    <a href="{{route('categoryShow', ['category'=>$article->category])}}">
                                        Category: {{$article->category->name}}
                                    </a>
                                    <p class="text-black">
                                        Date: {{$article->created_at->format('d/m/Y')}}
                                    </p>
                                    <a href="{{route('articles.show', compact('article'))}}" class="btn btn-primary">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-warning py-3">
                                <p class="lead">No articles matching your research. Try something else.</p>
                            </div>
                        </div>
                    @endforelse
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </div>

</x-layout>