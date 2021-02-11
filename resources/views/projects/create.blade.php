@extends('layouts.dashboard')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('projects.store') }}" method="POST" class="form" enctype="multipart/form-data">
        @csrf

        @include('projects.form')

        <div class="form-group mt-4">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        CKEDITOR.replace('detail');

    </script>
@endsection
