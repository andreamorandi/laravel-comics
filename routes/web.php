<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $comics = config('comics');
    $menu = [
        'characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'
    ];
    $features = [
        [
            'description' => 'digital comics',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'description' => 'dc merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'description' => 'subscription',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'description' => 'comic shop locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'description' => 'dc power visa',
            'image' => 'buy-dc-power-visa.svg'
        ],
    ];
    $footer_nav = [
        [
            'section_title' => 'dc comics',
            'links' => [
                'characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'
            ],
            'sub_nav' => [
                'section_title' => 'shop',
                'links' => [
                    'shop dc', 'shop dc collectibles',
                ],
            ],
        ],
        [
            'section_title' => 'dc',
            'links' => [
                'term of use', 'privacy policy (new)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'cpsc certificates', 'ratings', 'shop help', 'contact us'
            ],
        ],
        [
            'section_title' => 'sites',
            'links' => [
                'dc', 'mad magazine', 'dc kids', 'dc universe', 'dc power visa',
            ],
        ],
    ];
    $socials = [
        'facebook', 'twitter', 'twitter', 'youtube', 'pinterest', 'periscope'
    ];
    return view('comics', compact('comics', 'menu', 'features', 'footer_nav', 'socials'));
})->name('comics');

Route::get('/characters', function () {
    $menu = [
        'characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'
    ];
    $features = [
        [
            'description' => 'digital comics',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'description' => 'dc merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'description' => 'subscription',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'description' => 'comic shop locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'description' => 'dc power visa',
            'image' => 'buy-dc-power-visa.svg'
        ],
    ];
    $footer_nav = [
        [
            'section_title' => 'dc comics',
            'links' => [
                'characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'
            ],
            'sub_nav' => [
                'section_title' => 'shop',
                'links' => [
                    'shop dc', 'shop dc collectibles',
                ],
            ],
        ],
        [
            'section_title' => 'dc',
            'links' => [
                'term of use', 'privacy policy (new)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'cpsc certificates', 'ratings', 'shop help', 'contact us'
            ],
        ],
        [
            'section_title' => 'sites',
            'links' => [
                'dc', 'mad magazine', 'dc kids', 'dc universe', 'dc power visa',
            ],
        ],
    ];
    $socials = [
        'facebook', 'twitter', 'twitter', 'youtube', 'pinterest', 'periscope'
    ];
    return view('characters', compact('menu', 'features', 'footer_nav', 'socials'));
})->name('characters');

Route::get('/movies', function () {
    $menu = [
        'characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'
    ];
    $features = [
        [
            'description' => 'digital comics',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'description' => 'dc merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'description' => 'subscription',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'description' => 'comic shop locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'description' => 'dc power visa',
            'image' => 'buy-dc-power-visa.svg'
        ],
    ];
    $footer_nav = [
        [
            'section_title' => 'dc comics',
            'links' => [
                'characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'
            ],
            'sub_nav' => [
                'section_title' => 'shop',
                'links' => [
                    'shop dc', 'shop dc collectibles',
                ],
            ],
        ],
        [
            'section_title' => 'dc',
            'links' => [
                'term of use', 'privacy policy (new)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'cpsc certificates', 'ratings', 'shop help', 'contact us'
            ],
        ],
        [
            'section_title' => 'sites',
            'links' => [
                'dc', 'mad magazine', 'dc kids', 'dc universe', 'dc power visa',
            ],
        ],
    ];
    $socials = [
        'facebook', 'twitter', 'twitter', 'youtube', 'pinterest', 'periscope'
    ];
    return view('movies', compact('menu', 'features', 'footer_nav', 'socials'));
})->name('movies');

Route::get('/tv', function () {
    $menu = [
        'characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'
    ];
    $features = [
        [
            'description' => 'digital comics',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'description' => 'dc merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'description' => 'subscription',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'description' => 'comic shop locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'description' => 'dc power visa',
            'image' => 'buy-dc-power-visa.svg'
        ],
    ];
    $footer_nav = [
        [
            'section_title' => 'dc comics',
            'links' => [
                'characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'
            ],
            'sub_nav' => [
                'section_title' => 'shop',
                'links' => [
                    'shop dc', 'shop dc collectibles',
                ],
            ],
        ],
        [
            'section_title' => 'dc',
            'links' => [
                'term of use', 'privacy policy (new)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'cpsc certificates', 'ratings', 'shop help', 'contact us'
            ],
        ],
        [
            'section_title' => 'sites',
            'links' => [
                'dc', 'mad magazine', 'dc kids', 'dc universe', 'dc power visa',
            ],
        ],
    ];
    $socials = [
        'facebook', 'twitter', 'twitter', 'youtube', 'pinterest', 'periscope'
    ];
    return view('tv', compact('menu', 'features', 'footer_nav', 'socials'));
})->name('tv');

Route::get('/games', function () {
    $menu = [
        'characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'
    ];
    $features = [
        [
            'description' => 'digital comics',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'description' => 'dc merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'description' => 'subscription',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'description' => 'comic shop locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'description' => 'dc power visa',
            'image' => 'buy-dc-power-visa.svg'
        ],
    ];
    $footer_nav = [
        [
            'section_title' => 'dc comics',
            'links' => [
                'characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'
            ],
            'sub_nav' => [
                'section_title' => 'shop',
                'links' => [
                    'shop dc', 'shop dc collectibles',
                ],
            ],
        ],
        [
            'section_title' => 'dc',
            'links' => [
                'term of use', 'privacy policy (new)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'cpsc certificates', 'ratings', 'shop help', 'contact us'
            ],
        ],
        [
            'section_title' => 'sites',
            'links' => [
                'dc', 'mad magazine', 'dc kids', 'dc universe', 'dc power visa',
            ],
        ],
    ];
    $socials = [
        'facebook', 'twitter', 'twitter', 'youtube', 'pinterest', 'periscope'
    ];
    return view('games', compact('menu', 'features', 'footer_nav', 'socials'));
})->name('games');

Route::get('/collectibles', function () {
    $menu = [
        'characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'
    ];
    $features = [
        [
            'description' => 'digital comics',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'description' => 'dc merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'description' => 'subscription',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'description' => 'comic shop locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'description' => 'dc power visa',
            'image' => 'buy-dc-power-visa.svg'
        ],
    ];
    $footer_nav = [
        [
            'section_title' => 'dc comics',
            'links' => [
                'characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'
            ],
            'sub_nav' => [
                'section_title' => 'shop',
                'links' => [
                    'shop dc', 'shop dc collectibles',
                ],
            ],
        ],
        [
            'section_title' => 'dc',
            'links' => [
                'term of use', 'privacy policy (new)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'cpsc certificates', 'ratings', 'shop help', 'contact us'
            ],
        ],
        [
            'section_title' => 'sites',
            'links' => [
                'dc', 'mad magazine', 'dc kids', 'dc universe', 'dc power visa',
            ],
        ],
    ];
    $socials = [
        'facebook', 'twitter', 'twitter', 'youtube', 'pinterest', 'periscope'
    ];
    return view('collectibles', compact('menu', 'features', 'footer_nav', 'socials'));
})->name('collectibles');

Route::get('/videos', function () {
    $menu = [
        'characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'
    ];
    $features = [
        [
            'description' => 'digital comics',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'description' => 'dc merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'description' => 'subscription',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'description' => 'comic shop locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'description' => 'dc power visa',
            'image' => 'buy-dc-power-visa.svg'
        ],
    ];
    $footer_nav = [
        [
            'section_title' => 'dc comics',
            'links' => [
                'characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'
            ],
            'sub_nav' => [
                'section_title' => 'shop',
                'links' => [
                    'shop dc', 'shop dc collectibles',
                ],
            ],
        ],
        [
            'section_title' => 'dc',
            'links' => [
                'term of use', 'privacy policy (new)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'cpsc certificates', 'ratings', 'shop help', 'contact us'
            ],
        ],
        [
            'section_title' => 'sites',
            'links' => [
                'dc', 'mad magazine', 'dc kids', 'dc universe', 'dc power visa',
            ],
        ],
    ];
    $socials = [
        'facebook', 'twitter', 'twitter', 'youtube', 'pinterest', 'periscope'
    ];
    return view('videos', compact('menu', 'features', 'footer_nav', 'socials'));
})->name('videos');

Route::get('/fans', function () {
    $menu = [
        'characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'
    ];
    $features = [
        [
            'description' => 'digital comics',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'description' => 'dc merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'description' => 'subscription',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'description' => 'comic shop locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'description' => 'dc power visa',
            'image' => 'buy-dc-power-visa.svg'
        ],
    ];
    $footer_nav = [
        [
            'section_title' => 'dc comics',
            'links' => [
                'characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'
            ],
            'sub_nav' => [
                'section_title' => 'shop',
                'links' => [
                    'shop dc', 'shop dc collectibles',
                ],
            ],
        ],
        [
            'section_title' => 'dc',
            'links' => [
                'term of use', 'privacy policy (new)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'cpsc certificates', 'ratings', 'shop help', 'contact us'
            ],
        ],
        [
            'section_title' => 'sites',
            'links' => [
                'dc', 'mad magazine', 'dc kids', 'dc universe', 'dc power visa',
            ],
        ],
    ];
    $socials = [
        'facebook', 'twitter', 'twitter', 'youtube', 'pinterest', 'periscope'
    ];
    return view('fans', compact('menu', 'features', 'footer_nav', 'socials'));
})->name('fans');

Route::get('/news', function () {
    $menu = [
        'characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'
    ];
    $features = [
        [
            'description' => 'digital comics',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'description' => 'dc merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'description' => 'subscription',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'description' => 'comic shop locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'description' => 'dc power visa',
            'image' => 'buy-dc-power-visa.svg'
        ],
    ];
    $footer_nav = [
        [
            'section_title' => 'dc comics',
            'links' => [
                'characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'
            ],
            'sub_nav' => [
                'section_title' => 'shop',
                'links' => [
                    'shop dc', 'shop dc collectibles',
                ],
            ],
        ],
        [
            'section_title' => 'dc',
            'links' => [
                'term of use', 'privacy policy (new)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'cpsc certificates', 'ratings', 'shop help', 'contact us'
            ],
        ],
        [
            'section_title' => 'sites',
            'links' => [
                'dc', 'mad magazine', 'dc kids', 'dc universe', 'dc power visa',
            ],
        ],
    ];
    $socials = [
        'facebook', 'twitter', 'twitter', 'youtube', 'pinterest', 'periscope'
    ];
    return view('news', compact('menu', 'features', 'footer_nav', 'socials'));
})->name('news');

Route::get('/shop', function () {
    $menu = [
        'characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'
    ];
    $features = [
        [
            'description' => 'digital comics',
            'image' => 'buy-comics-digital-comics.png'
        ],
        [
            'description' => 'dc merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'description' => 'subscription',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'description' => 'comic shop locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'description' => 'dc power visa',
            'image' => 'buy-dc-power-visa.svg'
        ],
    ];
    $footer_nav = [
        [
            'section_title' => 'dc comics',
            'links' => [
                'characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'
            ],
            'sub_nav' => [
                'section_title' => 'shop',
                'links' => [
                    'shop dc', 'shop dc collectibles',
                ],
            ],
        ],
        [
            'section_title' => 'dc',
            'links' => [
                'term of use', 'privacy policy (new)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'cpsc certificates', 'ratings', 'shop help', 'contact us'
            ],
        ],
        [
            'section_title' => 'sites',
            'links' => [
                'dc', 'mad magazine', 'dc kids', 'dc universe', 'dc power visa',
            ],
        ],
    ];
    $socials = [
        'facebook', 'twitter', 'twitter', 'youtube', 'pinterest', 'periscope'
    ];
    return view('shop', compact('menu', 'features', 'footer_nav', 'socials'));
})->name('shop');
