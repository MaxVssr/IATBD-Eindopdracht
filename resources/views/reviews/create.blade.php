@extends('default')

@section('title')
    Schrijf review
@endsection

@section('content')
<main class="main">
    <section class="create-form">
        <h1 class="create-form__header">Schrijf een review!</h1>
        <form class="create-form__form" action="/review" method="post" enctype="multipart/form-data">
            @csrf

            <section class="create-form__section">
                <label for="name">Naam</label>
                <select class="create-form__select" type="text" name="product_name" id="product_name">
                    @foreach($products as $product)
                        <option value="{{$product->name}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </section>

            <section class="create-form__section">
                <label for="description">Reviews</label>
                <textarea class="create-form__input create-form__textarea create-form__input--big" name="review_content" id="review_content" type="text-area"></textarea>
            </section>

            
            <section class="create-form__btnSection">
                <a class="create-form__back-button" href="/">Annuleren</a>
                <input class="create-form__button" type="submit" value="Verzenden">
            </section>
        </form>
    </section>
</main>
@endsection
