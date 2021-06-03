@extends('site.layout.default')

@section('title') Home Page @endsection

@section('content')
    {{--<h1>{{  $test }}</h1>--}}
    <section class="section py-5 my-5">
        <div class="text-center">
            <small class="font-family-secondary text-uppercase font-weight-bold letter-spacing-caption text-muted">
                general contractors in new york
            </small>
            <h1 class="mb-4">PROFI Contractors</h1>
            <div class="row no-gutters mt-6 mt-md-10 mt-lg-17">
                <div class="col-12 col-lg-10 offset-0 offset-lg-1">
                    <p class="fs-5 mb-5">
                        This is a great space to write long text about your
                        company and your services. You can use this space to go into a little more detail about your
                        company. Talk about your team and what services you provide. Tell your visitors the story of how
                        you
                        came up with the idea for your business and what makes you different from your competitors. Make
                        your company stand out and show.
                    </p>
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
                    <p class="fs-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque dolores modi natus odit qui ratione? Aperiam aspernatur commodi est provident qui rerum sint sunt suscipit voluptate voluptatum. Cupiditate deleniti eaque exercitationem labore laborum quisquam ut! Blanditiis deserunt dolore, esse et excepturi fugit, impedit optio pariatur, perspiciatis repellendus reprehenderit similique. Aliquam beatae blanditiis dolore et minima minus modi mollitia officia provident sed, sint suscipit tempore voluptates! Accusantium, culpa dignissimos, dolor dolore eaque expedita explicabo, hic libero nemo odio quaerat sed voluptas voluptates. A ad at ducimus earum hic iusto natus necessitatibus nostrum, optio pariatur quidem, reiciendis rerum totam velit veniam.</p>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('page-scripts')

    <script>

    </script>

@endsection