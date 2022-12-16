<?php
$features = [
    [
        'description' => 'digital comics',
        'image' => 'buy-comics-digital-comics.png',
    ],
    [
        'description' => 'dc merchandise',
        'image' => 'buy-comics-merchandise.png',
    ],
    [
        'description' => 'subscription',
        'image' => 'buy-comics-subscriptions.png',
    ],
    [
        'description' => 'comic shop locator',
        'image' => 'buy-comics-shop-locator.png',
    ],
    [
        'description' => 'dc power visa',
        'image' => 'buy-dc-power-visa.svg',
    ],
];
?>
<div class="banner">
    <div class="container">
        <div class="row">
            @foreach ($features as $item)
                <div class="col">
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/' . $item['image']) }}">
                        <span class="image-description">{{ $item['description'] }}</span>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>
