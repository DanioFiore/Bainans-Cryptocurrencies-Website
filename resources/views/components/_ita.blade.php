<form action="{{route('set_language_locale', $lang)}}" method="POST">
    @csrf
    <div class="d-flex justify-content-center">
        <button type="submit" class="nav-link" style="background-color: transparent; border:none;">
            <img src="/img/icons8-italy-48.png" alt="" style="height: 32px" width="32px">
        </button>
    </div>
</form>