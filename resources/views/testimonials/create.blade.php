@extends('layouts.dashboard')


@section('content')

    <div class="card">
        <div class="card-header">
            Create new testimonial
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('testimonials.store') }}" enctype="multipart/form-data">
                @csrf
                @include('testimonials.form')
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

@endsection
