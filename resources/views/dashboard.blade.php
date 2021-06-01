@extends('default')

@section('head-extra')
    <link rel="stylesheet" href="/css/dashboard.css">
@endsection

@section('content')
    <section class="owned-products__header">
        <h2>Lend products</h2>
    </section>
    <ul class="u-grid-12 u-grid-gap-2 card-wrapper">
        @if(count($lend_products) != 0)
            @foreach($lend_products as $lend_product)
                @include('products.lendCard')
            @endforeach
        @else
        <section class="lended-products__not">
            <p>You aren't lending at the moment!</p>
        </section>
        @endif
    </ul>


    <section class="owned-products__header">
        <h2>Owned products</h2>
    </section>
    <ul class="u-grid-12 u-grid-gap-2 card-wrapper">
        @if(count($owned_products) != 0)
            @foreach($owned_products as $owned_product)
                @include('products.ownedCard')
            @endforeach
        @else
            <section class="owned-products__not">
                <p>You have no product available to lend out!</p>
            </section>
        @endif
    </ul>
@endsection
    
