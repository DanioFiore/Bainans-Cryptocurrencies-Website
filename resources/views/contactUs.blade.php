<x-layout>

    <div class="container contactUsPageAnimation" style="margin-top: 70px">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>
                    Need help?
                </h2>
                <h3>
                    Sending us an Email!
                </h3>
            </div>
        </div>
    </div>
    
    {{-- form start --}}
    <div class="container contactUsPageAnimation">
        <div class="row justify-content-center">
            <div class="col-6">
                <form class="mt-4" id="formContactUs" method="POST" action="{{route('contactSubmit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label text-warning">Name and Surname</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameSurname" required>
                        <div id="nameSurname" class="form-text text-white"></div>
                        </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-warning">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label text-warning">Your text</label>
                        <input name="text" type="text" class="form-control" id="exampleInputText" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
      {{-- form end --}}
</x-layout>