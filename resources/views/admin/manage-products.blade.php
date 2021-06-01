@extends('default')

@section('content')
    <a class="back-link" href="/manage">Terug naar beheerpagina</a>
    <section class="manage-user__section">
        <h2 class="manage-header">Beheer alle producten</h2>
        <ul class="manage-list">
            <li class="manage-list__item">
                <article>
                    <section class="manage-list__item__container">
                        <p class="manage-list__item__value">Id</p>
                        <p class="manage-list__item__value">Naam</p>
                        <p class="manage-list__item__value"></p>
                        <p class="manage-list__item__action">Actie</p>
                    </section>
                </article>
            </li>
            @if(count($products) != 0)
                @foreach ($products as $product)
                    @include('admin.product-item')
                @endforeach
            @else
                <p class="no-entries">Er zijn momenteel geen producten.</p>
            @endif
        </ul>
    </section>
@endsection