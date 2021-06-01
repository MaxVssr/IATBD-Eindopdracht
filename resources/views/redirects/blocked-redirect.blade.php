@extends('default')

@section('content')
    <section>
        <section class="redirect-section">
            <h2 class="redirect-section__h2">Het ziet er naar uit dat je bent geblokkeerd door één van onze administrators.</h2>
            <p>Dit kan gebeurd zijn doordat je ons beleid hebt geschonden.</p>
            <p>Is dit niet het geval? Email ons dan om in beroep te gaan tegen deze beslissing op: appealban@time2share.com</p>    
        </section>
        <section class="redirect-btnSection">
            <button class="redirect-btnSection__button" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Uitloggen</button>
        </section>
    </section>
@endsection