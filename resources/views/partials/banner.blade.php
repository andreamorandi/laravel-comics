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
