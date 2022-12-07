@extends('layouts.admin-dashboard')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('clients.update', $client->id) }}" class="mb-4" id="postForm" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        @include('clients.form')

        <div class="form-group my-4">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>

@endsection
