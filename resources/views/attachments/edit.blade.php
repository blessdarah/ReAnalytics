@extends('layouts.dashboard')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('attachments.update', $attachment->id) }}" method="POST" class="form"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        @include('attachments.form')

        <div class="form-group mt-4">
            <button class="btn btn-indigo" type="submit">Update</button>
        </div>
    </form>

@endsection

@section('scripts')
    <script>
        const editorContainer = document.querySelector('.editor');
        const editor = MediumEditor(editorContainer);

    </script>
@endsection
