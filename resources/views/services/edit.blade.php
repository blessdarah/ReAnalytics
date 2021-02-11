@extends('layouts.dashboard')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('services.update', $service->id) }}" method="POST" class="form" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        @include('services.form')

        <div class="form-group mt-4">
            <button class="btn btn-indigo" type="submit">Update</button>
        </div>
    </form>

@endsection

@section('scripts')
    <script>
        CKEDITOR.replace('detail', {
            filebrowserUploadUrl: "{{ route('files.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });

    </script>
@endsection
