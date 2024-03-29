@extends('layouts.admin-dashboard')


@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
<x-form id="projectForm" action="{{ route('projects.update', $project->id) }}" method="POST" buttonText="Update" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    @include('projects.form')
</x-form>
@endsection


@section('scripts')
<script>
    const Editor = toastui.Editor;
    const projectContent = `{!! Str::markdown($project->detail) !!}`;
    const editor = new Editor({
        el: document.querySelector('#editor'),
        height: '400px',
        // initialEditType: 'markdown',
        initialEditType: 'wysiwyg',
        initialValue: projectContent
    });

    document.querySelector('#projectForm').addEventListener('submit', e => {
        e.preventDefault();
        document.querySelector('#detail').value = editor.getHTML();
        e.target.submit();
    });
</script>

<script>
    const imageUploadInput = document.querySelector('#btn__upload');
    imageUploadInput.addEventListener('change', previewImage);

    function previewImage() {
        const file = imageUploadInput.files;
        if (file) {
            const fileReader = new FileReader();
            const preview = document.getElementById('file-preview');
            fileReader.onload = event => {
                preview.setAttribute('src', event.target.result);
            }
            fileReader.readAsDataURL(file[0]);
        }
    }
</script>

@endsection
