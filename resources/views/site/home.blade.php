@extends('site.layout.default')

@section('title') {{ __('main.Home Page') }} @endsection

@section('content')
    {{--<h1>{{  $test }}</h1>--}}
    <section class="section py-5">
        <div class="text-center">
            <small class="font-family-secondary text-uppercase font-weight-bold letter-spacing-caption text-muted">
                {{ __('main.general_contractors_in_new_york')}}
            </small>
            <h1 class="mb-4">{{ __('main.profi_contractors') }}</h1>
            <div class="row no-gutters mt-6 mt-md-10 mt-lg-17">
                <div class="col-12 col-lg-10 offset-0 offset-lg-1">
                    <p class="fs-5 mb-5">{{ __('main.profi_contractors_text') }}</p>
                </div>
            </div>
            <div class="row mt-6 mt-md-10 mt-lg-17 vertical-divider-light mb-5">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0">
                        <div class="card-body py-17 px-10 d-flex flex-column align-items-center">
                            <div class="card-icon mb-6"><img src="{{ asset('images/site/yelp.svg') }}" alt="yelp icon" width="45">
                            </div>
                            <div class="font-family-secondary text-muted">4.5 stars on Yelp</div>
                            <div class="star-rating">
                                <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0">
                        <div class="card-body py-17 px-10 d-flex flex-column align-items-center">
                            <div class="card-icon mb-6"><img src="{{ asset('images/site/g.svg') }}" alt="google icon" width="45">
                            </div>
                            <div class="font-family-secondary text-muted">5 stars on Yelp</div>
                            <div class="star-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0">
                        <div class="card-body py-17 px-10 d-flex flex-column align-items-center">
                            <div class="card-icon mb-6"><img src="{{ asset('images/site/houzz.svg') }}" alt="houzz icon" width="45">
                            </div>
                            <div class="font-family-secondary text-muted">5 stars on Houzz</div>
                            <div class="star-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0">
                        <div class="card-body py-17 px-10 d-flex flex-column align-items-center">
                            <div class="card-icon mb-6"><img src="{{ asset('images/site/fb.svg') }}" alt="facebook icon" width="45">
                            </div>
                            <div class="font-family-secondary text-muted">4.7 stars on Facebook</div>
                            <div class="star-rating">
                                <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters mt-6 mt-md-10 mt-lg-17">
                <div class="col-12 col-lg-10 offset-0 offset-lg-1">
                    <p class="fs-5 mb-5">{{ __('main.wildfires_text') }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('page-scripts')

    <script>

    </script>

@endsection