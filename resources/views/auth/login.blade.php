<x-layout>
    {{-- title container start --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>Login</h2>
                <h4>You are at Home</h4>
            </div>
        </div>
    </div>
    {{-- title container end --}}

    {{-- login form start --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="emailInput" class="form-label text-warning">
                            Email address
                        </label>
                        <input type="email" class="form-control" id="emailInput" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label text-warning">
                            Password
                        </label>
                        <input type="password" class="form-control" id="passwordInput" name="password">
                    </div>
                    <button type="submit" class="btn btn-outline-warning">Login</button>
                </form>
            </div>
        </div>
    </div>
    

    {{-- login form end --}}

</x-layout>