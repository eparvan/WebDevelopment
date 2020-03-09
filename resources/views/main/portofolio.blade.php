<div class="container-fluid bg-cards pb-5">

    <div class="row">
        <div class="col-md-4 offset-md-4 services-text position-absolute">
            <h5 class="text-secondary">If you do it right, it will last forever.</h5>
        </div>
        <div class="col-md-4 offset-md-4 services">
            <h5 class="text-light text-background">portfolio</h5>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center pb-5 owl-carousel owl-theme">
            @foreach( [1, 2, 3] as $nr )
                <div class="p-0 border-0 item">
                    @include('components.card')
                </div>
            @endforeach
        </div>
    </div>
</div>
