@extends('site.layout.default')

@section('title') Update {{ $data->subject }} @endsection

@section('content')
    <section class="section my-5">
        <div class="row ">
            <div class="col-12">
                <h1 class="mb-4 fw-bold"> Update: {{ $data->subject }} </h1>
                <div class="bg-light p-4">
                    <!-- Update message form -->
                    <form action="{{ route('contact-data-update-submit', $data->id) }}" method="post" class="row mt-17">
                        @csrf
                        <div class="col-12 col-sm-4">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="subject" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="subject" class="form-label">Message subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" value="{{ $data->subject }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input  type="text" class="form-control" name="email" id="email" value="{{ $data->email }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" name="message" class="form-control" rows="5">{{ $data->message }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group my-3">
                                <button class="btn btn-primary btn-lg">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

