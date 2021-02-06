<div>
@if(session()->has('message'))
    <div class="alert alert-success">
     {{session('message')}}
    </div>
    @endif


    <form class="review-form" wire:submit.prevent="store">
        @csrf
										<span>
											<input wire:model="subject" type="text" placeholder="Subject"/>
                                            @error('subject') <span class="text-danger">{{$message}}</span>@enderror
										</span>
        <textarea class="input" wire:model="review" placeholder="Your review" ></textarea>
        @error('subject') <span class="text-danger">{{$message}}</span>@enderror
        <div class="rate-this">
            @error('rate') <span class="text-danger">{{$message}}</span>@enderror
        <strong class="text-uppercase">Your Rating</strong>
            <div class="rate-this">
                <input type="radio" id="star5" wire:model="rate" value="5"/><label for="star5"></label>
                <input type="radio" id="star4" wire:model="rate" value="4"/><label for="star4"></label>
                <input type="radio" id="star3" wire:model="rate" value="3"/><label for="star3"></label>
                <input type="radio" id="star2" wire:model="rate" value="2"/><label for="star2"></label>
                <input type="radio" id="star1" wire:model="rate" value="1"/><label for="star1"></label>

            </div>
        </div>

            @auth
            <input type="submit" class="btn btn-success" value="Save"></input>
            @else
        <a href="/login" class="primary-btn">For Submit Review Login</a>
            @endauth

    </form>
</div>
