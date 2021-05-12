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
@endsection

