@extends('site.layout.default')

@section('title') Home Page @endsection

@section('content')
    <section class="section py-5 my-5">
        <div class="text-center">
            <small class="font-family-secondary text-uppercase font-weight-bold letter-spacing-caption text-muted">
                general contractors in new york
            </small>
            <h1 class="mb-4">PROFI Contractors</h1>
            <div class="row no-gutters mt-6 mt-md-10 mt-lg-17">
                <div class="col-12 col-lg-10 offset-0 offset-lg-1">
                    <p class="fs-5 mb-5">This is a great space to write long text about your
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

    <section id="contacts" class="my-5">
        <div class="bg-light py-4">
            <div class="section-content container">
                <div class="text-center">
                    <small class="font-family-secondary text-uppercase font-weight-bold letter-spacing-caption text-muted">We answer within 24 hours</small>
                    <h1>Contact Us</h1></div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="#" class="row mt-17">
                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="first_name" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="first_name">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="last_name" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="last_name">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input  type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea id="message" class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row">
                                <div class="form-group form-check mb-9 mb-md-0 ps-0">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">

                                        <label class="form-check-label" for="exampleCheck1">
                                            I've read and agree with the <a href="#">Terms &amp; Policy</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group my-3">
                                    <button class="btn btn-primary btn-lg">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('page-scripts')

    <script>
        $('#contact').click(function () {
            $('html, body').animate({
                scrollTop: $("#contacts").offset().top
            }, 1000);

        })
    </script>

@endsection