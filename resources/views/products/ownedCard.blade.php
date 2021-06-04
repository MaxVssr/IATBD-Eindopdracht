<li class="u-list-style-none gridCard">
        <article>
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">{{$owned_product->name}}</h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{asset(str_replace('public', 'storage', $owned_product->image))}}" alt="">
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text">{{$owned_product->description}}</p>
            </section>
            <section class="gridCard__text2">
                @if($owned_product->status == 'Beschikbaar')
                    <p class="product__status green2">{{$owned_product->status}}</p>
                @else
                    <p class="product__status red2">{{$owned_product->status}}</p>
                @endif
                </section>
            @if($owned_product->status == 'Moet terug geaccepteerd worden')
                <form method="post" action="/returned">
                    @csrf
                <section class="gridCard__btnSection">
                    <input class="button" type="submit" value="Accepteer product terug">
                </section>
                    <input class="hidden" type='number' name='id' value='{{$owned_product->id}}'/>
                </form>
            @endif
        </article>
    </a>
</li>