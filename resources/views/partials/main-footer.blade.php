<footer>
    <div class="footer-top">
        <div class="links">
            <h3>
                LINKS
            </h3>
            @foreach ($nav as $navTitle)
                @foreach($navTitle as $name => $url)
                    <ul>
                        <li>
                            <a href="{{ $url }}" class="{{ request()->is($url) ? 'current-page' : '' }}">
                                {{ $name }}
                            </a>
                        </li>
                    </ul>
                @endforeach
            @endforeach
        </div>
        <div class="logo-big">
            <img src="{{ Vite::asset('resources/img/logodc.png') }}" class="img-fluid" alt="">
        </div>
    </div> 
    
    <div class="footer-bottom">
        <div class="container-bottom">
            <div class="sign">
                <a href="">
                    <h3>
                        SIGN-UP NOW!
                    </h3>
                </a>
            </div>
            <div class="social">
                <h3>
                    FOLLOW US
                </h3>
    
            </div>
        </div>
    </div>
</footer>