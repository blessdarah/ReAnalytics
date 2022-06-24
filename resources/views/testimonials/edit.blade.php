@extends('layouts.admin-dashboard')


@section('content')

    <div class="card">
        <div class="card-header">
            Update testimonial
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('testimonials.update', $testimonial->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @include('testimonials.form')
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

@endsection
