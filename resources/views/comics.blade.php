@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <section class="comics-section">
        <div class="container">
            <h2 class="section-title">CURRENT SERIES</h2>
            <div class="row">
                @foreach ($comics as $item)
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{ $item['thumb'] }}">
                        </div>
                        <p>{{ $item['series'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="load-more">
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
@endsection
