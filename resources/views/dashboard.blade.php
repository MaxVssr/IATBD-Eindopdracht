@extends('default')

@section('head-extra')
    <link rel="stylesheet" href="/css/dashboard.css">
@endsection

@section('content')
    <section class="owned-products__header">
        <h2>Geleende products</h2>
    </section>
    <ul class="u-grid-12 u-grid-gap-2 card-wrapper">
        @if(count($lend_products) != 0)
            @foreach($lend_products as $lend_product)
                @include('products.lendCard')
            @endforeach
        @else
        <section class="lended-products__not">
            <p>Je leent nog niks op dit moment!</p>
        </section>
        @endif
    </ul>


    <section class="owned-products__header">
        <h2>Eigen producten</h2>
    </section>
    <ul class="u-grid-12 u-grid-gap-2 card-wrapper">
        @if(count($owned_products) != 0)
            @foreach($owned_products as $owned_product)
                @include('products.ownedCard')
            @endforeach
        @else
            <section class="owned-products__not">
                <p>Je hebt geen producten om uit te lenen!</p>
            </section>
        @endif
    </ul>
@endsection
    
