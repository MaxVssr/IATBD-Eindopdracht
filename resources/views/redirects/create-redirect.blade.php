@extends('default')

@section('content')
    <section>
        <section class="redirect-section">
            <h2 class="redirect-section__h2">Jouw product is aangemaakt!</h2>
        </section>
        <section class="redirect-btnSection">
            <a class="redirect-btnSection__button" href="/">Ga naar Home</a>
            <a class="redirect-btnSection__button" href="/reviews/create">Bekijk product</a>
        </section>
    </section>
@endsection