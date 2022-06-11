@php
use Illuminate\Support\Str;
@endphp

@extends('layouts.admin-dashboard')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('services.update', $service->id) }}" class="mb-4" id="postForm" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        @include('services.form')

        <div class="form-group my-4">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>

@endsection

@section('scripts')
<script>
    const Editor = toastui.Editor;
    const serviceDetailContent = `{!! Str::markdown($service->detail) !!}`;
    const editor = new Editor({
        el: document.querySelector('#editor'),
        height: '400px',
        // initialEditType: 'markdown',
        initialEditType: 'wysiwyg',
        initialValue: serviceDetailContent
    });

    document.querySelector('#postForm').addEventListener('submit', e => {
        e.preventDefault();
        document.querySelector('#detail').value = editor.getMarkdown();
        e.target.submit();
    });
</script>
@endsection
