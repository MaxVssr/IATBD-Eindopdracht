@extends('default')

@section('content')
    <section>
        <section class="redirect-section">
            <h2 class="redirect-section__h2">Dit product is aan jouw leenlijst toegevoegd!</h2>
            <p>Wij verzoeken je vriendelijk om dit product binnen de afgesproken tijd terug te brengen.</p>    
        </section>
        <section class="redirect-btnSection">
            <a class="redirect-btnSection__button" href="/">Terug naar Home</a>
            <a class="redirect-btnSection__button" href="/dashboard">Ga naar Account</a>
        </section>
    </section>
@endsection