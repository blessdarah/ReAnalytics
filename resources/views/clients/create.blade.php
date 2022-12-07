@extends('layouts.admin-dashboard')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif

<form action="{{ route('clients.store') }}" id="clientForm" method="POST" class="form" enctype="multipart/form-data">
    @csrf

    @include('clients.form')

    <div class="form-group mb-4">
        <button class="btn btn-primary" type="submit">
            <i class="bx bx-save"></i>
            Save
        </button>
    </div>
</form>
@endsection

