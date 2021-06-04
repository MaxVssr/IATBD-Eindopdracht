@extends('default')

@section('title')
    Maak advertentie
@endsection

@section('content')
<main class="main">
    <section class="create-form">
        <h1 class="create-form__header">Maak hier je product advertentie</h1>
        <form class="create-form__form" action="/products" method="post" enctype="multipart/form-data">
            @csrf

            <section class="create-form__section">
                <label for="name">Naam</label>
                <input class="create-form__input" name="name" id="name" type="text">
            </section>

            <section class="create-form__section">
                <label for="kind">Categorie</label>
                <select class="create-form__select" name="category" id="category">
                    @foreach($category_of_products as $category_of_products)
                        <option value={{$category_of_products->category}}>{{$category_of_products->category}}</option>
                    @endforeach
                </select>
            </section>


            <section class="create-form__section">
                <label for="description">Beschrijving</label>
                <textarea class="create-form__input create-form__textarea create-form__input--big" name="description" id="description" type="text-area"></textarea>
            </section>

            <section class="create-form__section">
                <label for="image">Afbeelding</label>

                <input type="file" name="image" accept="image/*" id="image">
            </section>
            <section class="create-form__btnSection">
                <a class="create-form__back-button" href="/">Annuleren</a>
                <button class="create-form__button" type="submit">Maak advertentie</button>
            </section>
        </form>
    </section>
</main>
@endsection
