@extends('layouts.admin-dashboard')


@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PATCH')
<h4>Update Category</h4>
    @include('categories.form')

    <div class="form-group my-4">
        <a href="{{route('categories.index')}}" class="btn btn-secondary">
            <i class="bx bx-x"></i>
            cancel
        </a>
        <button class="btn btn-primary" type="submit">
            <i class="bx bx-save"></i>
            Update
        </button>
    </div>
</form>

@endsection

@section('scripts')

@endsection
