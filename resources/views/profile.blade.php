<x-layout>

    <div class="container profilePageAnimation">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>Hi, {{Auth::user()->name}}</h2>
                <h3>Adding some extra information about you</h3>
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
                        <label for="pictureProfile" class="form-label text-warning">Picture</label>
                        <img src="{{Auth::user()->profile->picture==Storage::url('public/defaultUserPicture.webp') ? Auth::user()->profile->picture : Storage::url(Auth::user()->profile->picture)}}" alt="" style="height: 100px; width: 100px; border-radius: 50px" class="d-block mb-3">
                        <input type="file" class="form-control" name="picture">
                    </div>
                    <div class="mb-3">
                      <label for="inputCountryProfile" class="form-label text-warning">Country:</label>
                      <input type="text" class="form-control" id="inputCountryProfile" name="country" value="{{Auth::user()->profile ? Auth::user()->profile->country : ''}}">
                    </div>
                    <div class="mb-3">
                      <label for="inputCityProfile" class="form-label text-warning">City:</label>
                      <input type="text" class="form-control" id="inputCityProfile" name="city" value="{{Auth::user()->profile ? Auth::user()->profile->city : ''}}">
                    </div>
                    <div class="mb-3">
                        <label for="inputPhoneProfile" class="form-label text-warning">Phone:</label>
                        <input type="text" class="form-control" id="inputPhoneProfile" name="phone" value="{{Auth::user()->profile ? Auth::user()->profile->phone : ''}}">
                    </div>
                    <button type="submit" class="btn btn-outline-warning">Save</button>
                </form>
            </div>
        </div>
    </div>
    

</x-layout>