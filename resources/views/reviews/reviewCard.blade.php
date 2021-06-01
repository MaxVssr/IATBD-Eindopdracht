@if(isset($review))   
    <li class="review-wrapper">
        <p class="review__product">{{$review->product_name}}</p>
        <p class="review__content">{{$review->review_content}}</p>
        <p class="review__user">By {{$review->lender_email}}</p>
        @if(Auth::user()->role == 'Admin')
            <form class="manage-list__item__action" method="post" action="/manage/review/delete">
                @method('DELETE')
                @csrf
                <input class="remove-button" type="submit" value="Verwijder">
                <input class="hidden" type='number' name='id' value='{{$review->id}}'/>
            </form>
        @endif
    </li>
@endif