<ul class="reviews-wrapper">
    @if(isset($reviews))
        @foreach ($reviews as $review)
            @include('reviews.reviewCard')
        @endforeach
    @endif
</ul>