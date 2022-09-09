<x-layout>
    {{-- title container start --}}
    <div class="container loginPageAnimation">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>{{__('ui.forgotPassTitle')}}</h2>
            </div>
        </div>
    </div>
    {{-- title container end --}}

    {{-- login form start --}}
    <div class="container loginPageAnimation">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{route('password.email')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="emailInput" class="form-label text-warning">
                            {{__('ui.loginEmail')}}
                        </label>
                        <input type="email" class="form-control" id="emailInput" name="email">
                    </div>
                    <button type="submit" class="btn btn-outline-warning">{{__('ui.forgotPassSendResetEmailButton')}}</button>
                </form>
            </div>
        </div>
    </div>
    

    {{-- login form end --}}

</x-layout>