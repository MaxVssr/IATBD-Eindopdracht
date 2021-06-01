<li class="u-list-style-none gridCard fade-in" data-category="{{$product->category}}">
    <a href="/products/{{$product->id}}">
        <article>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{asset(str_replace('public', 'storage', $product->image))}}" alt="">
            </figure>
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$product->name}}</h2>
            </header>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text">{{$product->description}}</p>
            </section>
            <section class="gridCard__categorySection">
                <p class="gridCard__text"> Categorie: {{$product->category}}</p>
            </section>
            <section class="gridCard__text">
                @if($product->status == 'Beschikbaar')
                    <p class="product__status green">{{$product->status}}</p>
                @else
                    <p class="product__status red">{{$product->status}}</p>
                @endif
            </section>
        </article>
    </a>
</li>