<x-layout>
    {{-- form start --}}
    <form id="formContactUs" method="POST" action="{{route('contactSubmit')}}">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label text-warning">Name and Surname</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameSurname">
                        <div id="nameSurname" class="form-text text-white"></div>
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label text-warning">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputText" class="form-label text-warning">Your text</label>
                      <input name="text" type="text" class="form-control" id="exampleInputText">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label text-white" for="exampleCheck1">Receive our NewsLetter</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
      </form>
      {{-- form end --}}
</x-layout>