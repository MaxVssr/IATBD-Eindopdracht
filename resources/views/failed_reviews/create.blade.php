@extends('default')

@section('title')
    Create Advert
@endsection

@section('content')
<!-- @if ($errors->any())
        <div class="alert alert--danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert__message">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
<main class="main">
    <section class="create-form">
        <h1 class="create-form__header">Write a review!</h1>
        <form class="create-form__form" action="/review" method="post" enctype="multipart/form-data">
            @csrf

            <section class="create-form__section">
                <label for="name">Name</label>
                <select class="create-form__select" type="text" name="product_name" id="product_name">
                    @foreach($products as $product)
                        <option value="{{$product->name}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </section>

            <section class="create-form__section">
                <label for="description">Review content</label>
                <textarea class="create-form__input create-form__textarea create-form__input--big" name="review_content" id="review_content" type="text-area"></textarea>
            </section>

            
            <section class="create-form__btnSection">
                <input class=".create-form__button" type="submit" value="Send">
            </section>
        </form>
    </section>
</main>
@endsection
