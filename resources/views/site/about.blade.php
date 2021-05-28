@extends('site.layout.default')

@section('title') About Us Page @endsection

@section('content')
    <section id="about">
        <div class="col-12">
            <h1 class="display-6 fw-bold bg-dark text-light p-2">Contact information about our staff</h1>
            <form method="get" action="{{ route('search') }}" >
                <div class="row">
                    <div class="form-group col-md-10">
                        <input type="text" class="form-control" id="s" name="s" placeholder="Search...">
                    </div>
                    <div class="form-group col-md-2">
                        <button class="btn btn-primary w-100" type="submit">Search</button>
                    </div>
                </div>
            </form>
            @if(count($staffs))
            <table class="table border-top mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($staffs as $staff)
                    <tr>
                        <th scope="row">{{ $staff->id }}</th>
                        <td>{{ $staff->name }}</td>
                        <td>{{ $staff->email }}</td>
                        <td>{{ $staff->phone }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                {{ $staffs->appends(['s' => request()->s])->links() }}
            @else
                <h3 class="my-5">Not Found ...</h3>
            @endif
        </div>




    </section>

@endsection