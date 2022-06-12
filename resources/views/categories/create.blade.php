@extends('layouts.admin-dashboard')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('categories.store') }}" method="POST" class="form">
        @csrf

        @include('categories.form')

        <div class="form-group mt-4">
            <button class="btn btn-primary d-flex align-items-center" type="submit">
            <i class="bx bx-save mb-0"></i>
             <span class="ml-2">Save</span>
            </button>
        </div>
    </form>
@endsection
