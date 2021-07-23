@extends('site.layout.default')

@section('title') {{ __('verify') }} @endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('verify_your_email_address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('verification_link') }}
                        </div>
                    @endif

                    {{ __('check_your_email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend', app()->getLocale()) }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click_here_to_request_another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
