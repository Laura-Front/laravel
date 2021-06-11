@extends('site.layout.default')

@section('title') Lravel Contact Page @endsection

@section('content')
    <section id="contacts" class="my-5">
        <div class="bg-light py-4">
            <div class="section-content">
                <div class="text-center">
                    <small class="font-family-secondary text-uppercase font-weight-bold letter-spacing-caption text-muted">We answer within 24 hours</small>
                    <h1>Contact Us</h1></div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- Create Contact Form -->
                        <form action="{{ route('contact-form') }}" method="post" class="row mt-17" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Full name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                                    @error('name')
                                        <strong><small class="text-danger">{{ $message }}</small></strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input  type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <strong><small class="text-danger">{{ $errors->first('email') }}</small></strong>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="subject" class="form-label">Message subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}">
                                    @error('subject')
                                        <strong><small class="text-danger">{{ $message }}</small></strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="subject" class="form-label">Your avatar</label>
                                    <input type="file" class="form-control" name="avatar" id="avatar">
                                    @error('avatar')
                                     <strong><small class="text-danger">{{ $message }}</small></strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea id="message" name="message" class="form-control" rows="3"></textarea>
                                    @error('message')
                                    <strong><small class="text-danger">{{ $message }}</small></strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group my-3">
                                    <button class="btn btn-primary btn-lg" type="submit">Send message</button>
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