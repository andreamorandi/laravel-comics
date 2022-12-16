<?php
$menu = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
?>

<header>
    <div class="container">
        <div class="logo">
            <a href="/comics">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </a>
        </div>
        <nav class="header-navigation">
            <ul>
                @foreach ($menu as $item)
                    <li>
                        <a class="{{ Route::currentRouteName() === $item ? 'active' : '' }}"
                            href="{{ route($item) }}"><span>{{ $item }}</span></a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
