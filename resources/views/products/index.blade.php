@extends('default')

@section('content')

    <input class="js--search-bar" placeholder="Zoeken..." type="text" onkeyup="searchFunction()">
    
    <section class="category-filter-section">
        <select id="categories" class="category-filter-section__select">
            <option value="All">Alles</option>
            @php
                $categories = [];

                foreach ($products as $product) {
                    array_push($categories, $product->category);
                }

                $categories = array_unique($categories);
            @endphp
            @foreach($categories as $category)
                <option value="{{$category}}">{{$category}}</option>
            @endforeach
        </select>
    </section>


    <ul class="u-grid-12 u-grid-gap-2 card-wrapper">
        @foreach($products as $product)
            @include('products.components.productsCard--index')
        @endforeach
    </ul>
@endsection