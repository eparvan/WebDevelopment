<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 offset-md-4 services-text position-absolute">
            <h5 class="text-secondary">Don't be busy, be productive</h5>
        </div>
        <div class="col-md-4 offset-md-4 services">
            <h5 class="text-background">services</h5>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mb-5 pb-5">
        <div class="col-md-8 my-5">
            <div class="row">
                @foreach( [1, 2, 3, 4] as $nr )
                    @include('components.service')
                @endforeach
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-left">
            <div class="square bg-light"></div>
            <div class="rectangle bg-dark position-absolute"></div>
        </div>
    </div>
</div>
