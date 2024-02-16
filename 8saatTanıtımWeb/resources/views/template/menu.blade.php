<div class="menuMainGenerate">
    <div class="container">
        <div class="lineMenuDetail_top">
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/system/logo.png') }}" alt="">
            </a>
            <div class="allMenuHeader">
                <a class="textMenuLinkHref" href="{{ route('index') }}">Ana Sayfa</a>
                <a class="textMenuLinkHref" href="{{ route('about') }}">Hakkımızda</a>
                <a class="textMenuLinkHref" href="{{ route('contact') }}">İletişim</a>
                {{-- <a class="buttonMenuLine" href="">Başvur</a> --}}
            </div>
        </div>
    </div>
</div>
{{-- <script>
    document.addEventListener("scroll", function() {
        var scrollPosition = window.scrollY;

        if (scrollPosition >= 80) {
            document.querySelector(".menuMainGenerate").classList.add("scrollThsn");
        } else {
            document.querySelector(".menuMainGenerate").classList.remove("scrollThsn");
        }
    });
</script> --}}
