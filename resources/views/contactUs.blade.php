<x-layout>

    <div class="container contactUsPageAnimation" style="margin-top: 70px">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>
                    {{__('ui.contactTitle')}}
                </h2>
                <h3>
                    {{__('ui.contactSubtitle')}}
                </h3>
            </div>
        </div>
    </div>
    
    {{-- form start --}}
    <div class="container contactUsPageAnimation">
        <div class="row justify-content-center">
            <div class="col-6 colHelp">
                <form class="mt-4" id="formContactUs" method="POST" action="{{route('contactSubmit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label text-warning">{{__('ui.registerFormName')}}</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameSurname" required>
                        <div id="nameSurname" class="form-text text-white"></div>
                        </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-warning">{{__('ui.registerFormEmail')}}</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text text-white">{{__('ui.contactFormNeverShare')}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label text-warning">{{__('ui.contactFormMessage')}}</label>
                        <input name="text" type="text" class="form-control" id="exampleInputText" required>
                    </div>
                    <button type="submit" class="btn btn-warning">{{__('ui.contactFormButton')}}</button>
                </form>
                <img src="/img/help2.webp" alt="" class="helpImg">
            </div>
        </div>
    </div>
    
      {{-- form end --}}
</x-layout>