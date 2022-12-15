@extends('layouts.app')

@section('content')
    <section class="characters-section">
        <div class="container" style="padding: 3rem 0;">
            <h1 style="color: white; font-size: 3.25rem; text-align: center; margin-bottom: 3rem;">
                SHOP PAGE
            </h1>
            <a href="{{ route('comics') }}">
                <h2 style="color: aquamarine; text-decoration: underline; text-align: center;">
                    Go to main page
                </h2>
            </a>
        </div>
    </section>
@endsection
