<form action="{{route('set_language_locale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="nav-link" style="background-color: transparent; border:none;">
        <img src="/img/icons8-italy-48.png" alt="">
    </button>

</form>