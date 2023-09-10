<header>
<<<<<<< HEAD
    <nav>
        <div class="logo">
            <a href="http://127.0.0.1:8000/">
                <img src="{{ Vite::asset('resources/img/logodc.png') }}" class="img-fluid" alt="">
            </a>
        </div>
        <ul>
            @foreach ($nav as $navTitle)
                @foreach($navTitle as $name => $url)
                    <li>
                        <a href="{{ $url }}" class="{{ request()->is($url) ? 'current-page' : '' }}">
                            {{ $name }}
                        </a>
                    </li>
                @endforeach
            @endforeach
        </ul>
    </nav>
=======
    HEADER
>>>>>>> 3b62eab80cee43f9a004be450b1c42f6e2084e89
</header>