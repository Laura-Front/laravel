@extends('site.layout.default')

@section('title') Update {{ $data->subject }} @endsection

@section('content')
    <section class="section my-5">
        <div class="row ">
            <div class="col-12">
                <h1 class="mb-4 fw-bold"> Update: {{ $data->subject }} </h1>
                <div class="bg-light p-4">
                    <!-- Update message form -->
                    <form action="{{ route('contact-data-update-submit', $data->id) }}" method="post" class="row mt-17" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 col-sm-3">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="subject" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="subject" class="form-label">Message subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" value="{{ $data->subject }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input  type="text" class="form-control" name="email" id="email" value="{{ $data->email }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-3">
                            <div class="form-group mb-3">
                                <label for="subject" class="form-label">Your avatar</label>
                                <input type="file" class="form-control mb-3" name="avatar" id="avatar" onchange="encodeImgtoBase64(this)">
                                <div style="width: 50px;">
                                    <img src="{{ asset('storage/images/upload/'.$data->image) }}" alt="avatar" id="base64Img">
                                </div>
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

@section('page-scripts')

    <script>

        $(document).ready(function () {

            // Get image name in JQuery, but not upload file
            // $('input[name="avatar"]').change(function () {
            //     var avatarName = $(this).val().replace(/C:\\fakepath\\/i, '');
            //     console.log('avatar ---  ' + avatarName);
            //     $(this).parent('.form-group').find('img').attr('src','http://laravel.loc/storage/images/upload/' + avatarName);
            // });

        });

        // Get image name Base64 in JS
        function encodeImgtoBase64(element) {
            var file = element.files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                $("#base64Img").attr("src", reader.result);
            };
            reader.readAsDataURL(file);
        }

    </script>

@endsection
