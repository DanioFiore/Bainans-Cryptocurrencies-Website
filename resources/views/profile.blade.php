<x-layout>

    <div class="container profilePageAnimation">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>{{__('ui.sayHello')}} {{Auth::user()->name}}</h2>
                <h3>{{__('ui.profileSubtitle')}}</h3>
            </div>
        </div>
    </div>
    <div class="container profilePageAnimation">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="pictureProfile" class="form-label text-warning">{{__('ui.profilePicture')}}</label>
                        <img src="{{Auth::user()->profile->picture==Storage::url('public/defaultUserPicture.webp') ? Auth::user()->profile->picture : Storage::url(Auth::user()->profile->picture)}}" alt="" style="height: 100px; width: 100px; border-radius: 50px" class="d-block mb-3">
                        <input type="file" class="form-control" name="picture">
                    </div>
                    <div class="mb-3">
                      <label for="inputCountryProfile" class="form-label text-warning">{{__('ui.registerFormCountry')}}</label>
                      <input type="text" class="form-control" id="inputCountryProfile" name="country" value="{{Auth::user()->profile ? Auth::user()->profile->country : ''}}">
                    </div>
                    <div class="mb-3">
                      <label for="inputCityProfile" class="form-label text-warning">{{__('ui.registerFormCity')}}</label>
                      <input type="text" class="form-control" id="inputCityProfile" name="city" value="{{Auth::user()->profile ? Auth::user()->profile->city : ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="inputPhoneProfile" class="form-label text-warning">{{__('ui.registerFormPhone')}}</label>
                        <input type="text" class="form-control" id="inputPhoneProfile" name="phone" value="{{Auth::user()->profile ? Auth::user()->profile->phone : ''}}">
                    </div>
                    <button type="submit" class="btn btn-outline-warning">{{__('ui.profileSaveButton')}}</button>
                </form>

                @if (Auth::user()->is_writer)
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-12">
                                <h2>{{__('ui.writerArticleTitle')}}</h2>
                            </div>
                            
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">{{__('ui.modifyArticleTableName')}}</th>
                                        <th scope="col">{{__('ui.modifyArticleTableCreatedAt')}}</th>
                                        {{-- <th scope="col">{{__('ui.modifyArticleTableAction')}}</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Auth::user()->articles as $article)
                                        <tr>
                                            <td>
                                                {{$article->title}}
                                            </td>
                                            <td>
                                                {{$article->created_at->format('d/m/Y')}}
                                            </td>
                                            {{-- <td>
                                                <a href="{{route('writer.modifyPage', $article->id)}}" class="btn btn-outline-warning">{{__('ui.modifyArticleModifyButton')}}</a>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    

</x-layout>