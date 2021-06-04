<li class="u-list-style-none gridCard">
    <article>
        <header class="gridCard__header u-flex-v-center">
            <h2 class="gridCard__heading">{{$lend_product->name}}</h2>
        </header>
        <figure class="gridCard__figure">
            <img class="gridCard__image" src="{{asset(str_replace('public', 'storage', $lend_product->image))}}" alt="">
        </figure>
        <section class="gridCard__text">
            @if($lend_product->status == 'Beschikbaar')
                <p class="product__status green">{{$lend_product->status}}</p>
            @else
                <p class="product__status red">{{$lend_product->status}}</p>
            @endif
            <p class="product__return-date">Retourneren vóór: {{$lend_product->return_date}}</p>
        </section>  
        @if($lend_product->status == 'Niet beschikbaar')
            <form method="post" action="/returning">
                @csrf
                <section class="gridCard__btnSection">
                    <input class="button-return active" type="submit" value="Terugbrengen">
                </section>
                <input class="hidden" type='number' name='id' value='{{$lend_product->id}}'/>
            </form>
        @endif
    </article>
</li>