@extends('default')

@section('content')
    <section>
        <section class="redirect-section">
            <h2 class="redirect-section__h2">Het product is geretourneerd!</h2>
            <p>We vragen u vriendelijk om een ​​review achter te laten om de eigenaar op de hoogte te stellen van uw ervaring met hun product.</p>
        </section>
        <section class="redirect-btnSection">
            <a class="redirect-btnSection__home-button" href="/">Ga naar Home</a>
            <a class="redirect-btnSection__button" href="/reviews/create">Laat review achter</a>
        </section>
    </section>
@endsection