<x-layout>
    @if (session('flash'))
    <div id="flashDivShow" class="alert alert-success d-flex justify-content-between" style="margin-top: 50px">
        {{session('flash')}}
        <button id="closeFlashButton" type="button" class="btn btn-outline-danger">x</button>
    </div>
@endif

@if(session()->has('access.denied'))
    <div class="flex flex-row justify-center my-2 alert alert-danger">
        {{session('access.denied')}}
    </div>
@endif

@if(session()->has('message'))
    <div class="flex flex-row justify-center my-2 alert alert-success">
        {{session('message')}}
    </div>
@endif
    <div class="container registerPageAnimation">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>{{__('ui.resetPasswordTitle')}}</h2>
            </div>
        </div>
    </div>

     {{-- register form start --}}
     <div class="container registerPageAnimation">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{url('reset-password')}}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{$request->token}}">
                    <div class="mb-3">
                        <label for="emailInput" class="form-label text-warning">
                            {{__('ui.registerFormEmail')}}
                        </label>
                        <input type="email" class="form-control" id="emailInput" name="email" value="{{$request->email}}">
                        <div id="emailHelp" class="form-text text-warning">{{__('ui.registerFormEmailNotShare')}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label text-warning">
                            {{__('ui.registerFormPassword')}}
                        </label>
                        <input type="password" class="form-control" id="passwordInput" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="passwordRepeatInput" class="form-label text-warning">
                            {{__('ui.registerFormPasswordRepeat')}}
                        </label>
                        <input type="password" class="form-control" id="passwordRepeatInput" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-outline-warning">{{__('ui.resetPasswordFormButton')}}</button>
                </form>
            </div>
        </div>
    </div>
   

    {{-- register form end --}}

</x-layout>