<section class="review-wrapper">
    @if(isset($reviews))
        @foreach ($reviews as $review)
            @include('reviews.reviewCard')
        @endforeach
    @endif
</section>