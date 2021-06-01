<section class="product-show">
    <section class="product">
        <section class="product__image-container">
            <ul class="product__image">
                <li class="product__image-item">
                    <img class="product__image-item__image" src="{{asset(str_replace('public', 'storage', $products->image))}}" alt="">
                </li>
            </ul>
        </section>
        <section class="product__info">
            <h1 class="product__header">{{$products->name}}</h1>
            <p class="product__owner">Dit product is eigendom van: {{$products->owner_email}}</p>
            <h2 class="product__description-header">Product-info</h2>
            <p class="product__description">{{$products->description}}</p>
            @if($products->status == 'Beschikbaar')
                <p class="product__status green">{{$products->status}}</p>
            @else
                <p class="product__status red">{{$products->status}}</p>
            @endif
            <section class="create-form__btnSection">
                <form method="post" action="/lend">
                    @csrf
                    @if($products->status == 'Beschikbaar')
                        <input class="create-form__button" type="submit" value="Lenen">
                    @else
                        <input class="create-form__button-inactive" type="submit" value="Niet beschikbaar">
                    @endif
                        <input class="hidden" type="number" name="id" value="{{$products->id}}">
                    
                </form>
            </section>
        </section>
    </section>
</section>