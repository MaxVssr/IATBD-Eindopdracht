@extends('default')

@section('content')
    <a class="back-link" href="/dashboard">Terug naar Account</a>
    <section class="manage-page__buttons">
        <section class="manage-page__buttons__btnSection">
            <h2>Zie alle gebruikers</h2>
            <a class="manage-page__buttons__btnSection__button" href="/manage/users">Beheer gebruikers</a>
        </section>
        <section class="manage-page__buttons__btnSection">
            <h2>Zie alle producten</h2>
            <a class="manage-page__buttons__btnSection__button" href="/manage/products">Beheer producten</a>
        </section>
    </section> 
@endsection