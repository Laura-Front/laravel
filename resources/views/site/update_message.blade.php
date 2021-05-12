@extends('site.layout.default')

@section('title') {{ $data->subject }} @endsection

@section('content')
    <section class="section my-5">
        <div class="row ">
            <div class="col-8">
                <h1 class="mb-4 fw-bold"> {{ $data->subject }} </h1>
                <div class="alert alert-info">
                    <p class="mb-3">{{ $data->message }}</p>
                    <p>{{ $data->email }}</p>
                    <p><small>{{ $data->created_at }}</small></p>
                    <a href="{{ route('contact-data-update', $data->id) }}" class="btn btn-primary">Update</a>
                    <a href="{{ route('contact-data-show-one', $data->id) }}" class="btn btn-primary">Delate</a>
                </div>

            </div>
        </div>
    </section>


    <section id="contacts" class="my-5">
        <div class="bg-light py-4">
            <div class="section-content">
                <div class="text-center">
                    <h1>Update this message</h1></div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">

                        <!-- Update message form -->
                        <form action="{{ route('contact-form') }}" method="post" class="row mt-17">
                            @csrf
                            <div class="col-12 col-sm-6">
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="subject" class="form-label">Message subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject" value="{{ $data->subject }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input  type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="subject" class="form-label">Message subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea id="message" name="message" class="form-control" rows="3" value="{{ old('message') }}"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
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

