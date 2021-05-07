@extends('site.layout.default')

@section('title') Reviews @endsection

@section('content')
    <section class="p-5 my-5 bg-light rounded-3" id="about">
        <div class="py-3">
            <h1 class="display-5 fw-bold">Add your reviews</h1>
            <form method="post" action="reviews/check">
                @csrf
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter review">
                </div>
                <div class="mb-3">
                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Enter messages"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>

@endsection