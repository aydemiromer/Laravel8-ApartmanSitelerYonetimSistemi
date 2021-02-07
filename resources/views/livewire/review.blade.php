<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

            <form class="form-a" wire:submit.prevent="store">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="inputName">Subject</label>
                            <input type="text" wire:model="subject" class="form-control form-control-lg form-control-a" id="inputName"
                                   required>
                            @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="textMessage">Review</label>
                            <textarea  wire:model="review" class="form-control" placeholder="Comment**"  cols="45"
                                      rows="8" required></textarea>
                            @error('review')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    {{--<div class="form-group">
                        <div class="input-rating">
                            @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                            <strong class="text-uppercase">Your Rating:</strong>

                            --}}{{--<div class="fa fa-star-o">
                                <input type="radio" id="fa fa-star-o" wire:model="rate" value="5" /><label for="fa fa-star5"></label>
                                <input type="radio" id="fa fa-star-o" wire:model="rate" value="4" /><label for="fa fa-star4"></label>
                                <input type="radio" id="fa fa-star-o" wire:model="rate" value="3" /><label for="fa fa-star3"></label>
                                <input type="radio" id="fa fa-star-o" wire:model="rate" value="2" /><label for="fa fa-star2"></label>
                                <input type="radio" id="fa fa-star-o" wire:model="rate" value="1" /><label for="fa fa-star1"></label>
                            </div>--}}{{--
                        </div>
                    </div>--}}

                    {{--<div class="col-md-12">
                        <button type="submit" class="btn btn-a">Send Message</button>
                    </div>--}}
                </div>
                @auth
                    <input type="submit" class="btn btn-success" value="Save"></input>
                @else
                    <a href="/login" class="btn btn-a">For submit Review Login</a>
                @endauth
            </form>
        </div>
    </div>
</div>



