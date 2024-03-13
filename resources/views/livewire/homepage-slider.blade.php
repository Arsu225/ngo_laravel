<div>
    <div class="carousel-inner w-100">
        @foreach ($banners as  $banner)
        <div class="carousel-item @if ($loop->index == 0) active @endif  crsl-txt">
            <img class="Myimg" src="{{ asset('storage/'.$banner->image) }}" alt="..." />
            <!-- <div class="carousel-caption d-none d-md-block CustomCarousel"> -->
                <div class="card-img-overlay mYcard">
                    {{-- @dd($banner) --}}
                    <h2 class="card-title Custom-title">{{$banner->name}} <br> poor by giving</h2>
                    <p class="card-text footertxt">
                    Lorem ipsum dolor sit amet, consectetur cing elit. Suspe ndisse suscipit sagittis leo sit met
                    condimentum estibulum dignissim posuere cubilia Curae; Suspendisse at consectetur massa.
                    Curabitur non ipsum nisinec dapibus elit. Donec nec magna id lacus consequat posuere. Aenean ut
                    diam vitae ante interdum interdum ut sit amet metus.
                    </p>
                    <button type="button" class="bnner-btns">Donate Now</button>
                </div>
            <!-- </div> -->
        </div>
        @endforeach
    </div>
</div>
