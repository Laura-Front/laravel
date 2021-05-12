@extends('site.layout.default')

@section('title') Contact messages @endsection

@section('content')
    <section class="section my-5">
        <div class="row ">
            <div class="col-8">
                <h1 class="mb-4 fw-bold"> All messages</h1>
                @foreach( $data as $data_item)
                    <div class="alert alert-info">
                        <h3 class="mb-3">{{ $data_item->subject }}</h3>
                        <p>{{ $data_item->email }}</p>
                        <p><small>{{ $data_item->created_at }}</small></p>
                        <a href="{{ route('contact-data-show-one', $data_item->id) }}" class="btn btn-primary">Details</a>
                    </div>
                @endforeach
            </div>
        </div>


    </section>
@endsection

