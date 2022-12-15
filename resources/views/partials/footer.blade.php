<footer>
    <div class="footer-main">
        <div class="container">
            <div class="nav">
                <div class="row">
                    @foreach ($footer_nav as $section)
                        <div class="col">
                            <h3>{{ $section['section_title'] }}</h3>
                            <ul>
                                @foreach ($section['links'] as $item)
                                    <li>
                                        <a href="#"><span>{{ $item }}</span></a>
                                    </li>
                                @endforeach
                                @isset($section['sub_nav'])
                                    <h3>{{ $section['sub_nav']['section_title'] }}</h3>
                                    <ul>
                                        @foreach ($section['sub_nav']['links'] as $item)
                                            <li>
                                                <a href="#"><span>{{ $item }}</span></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endisset
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo">
            </div>
        </div>
    </div>
    <div class="footer-cta">
        <div class="container">
            <div class="sign-up">
                <a href="/sign-up"><span>SIGN-UP NOW!</span></a>
            </div>
            <div class="follow-us">
                <span>FOLLOW US</span>
                @foreach ($socials as $item)
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-' . $item . '.png') }}"
                            alt="{{ $item }} . image">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
