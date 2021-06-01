@extends('default')

@section('content')
    @include('products.components.productsCard--show')
@endsection

@section('footer')
    <footer class="footer">
        <h2>Reviews</h2>
            @if(count($reviews) != 0)
                @include('reviews.review')
            @else
                <p class="no-reviews">There are no reviews for this product yet.</p>
            @endif
    </footer>
@endsection