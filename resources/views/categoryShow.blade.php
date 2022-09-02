<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="my-5">
                    Explore {{$category->name}}'s articles.
                </h2>
                @forelse ($category->articles as $article)
                    <div class="col-12 col-md-4 my-2">
                        <div class="card" style="width: 18rem;">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$article->title}}
                                </h5>
                                <p class="text-black">
                                    Date: {{$article->created_at->format('d/m/Y')}}
                                </p>
                                <p class="text-black">Author: {{$article->user->name ?? ''}}</p>
                                <a href="{{route('articles.show', compact('article'))}}" class="btn btn-primary">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p>No articles for this category!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

</x-layout>