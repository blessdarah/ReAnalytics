@extends('layouts.admin-dashboard')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
<form action="{{ route('services.store') }}" id="serviceForm" method="POST" class="form" enctype="multipart/form-data">
    @csrf

    @include('services.form')

    <div class="form-group mb-4">
        <button class="btn btn-primary" type="submit">
            <i class="bx bx-save"></i>
            Save
        </button>
    </div>
</form>
@endsection

@section('scripts')
<script>
    const Editor = toastui.Editor;
    const editor = new Editor({
        el: document.querySelector('#editor'),
        height: '400px',
        // initialEditType: 'markdown',
        initialEditType: 'wysiwyg',
        // placeholder: 'Write something cool!',
    });

    document.querySelector('#serviceForm').addEventListener('submit', e => {
        e.preventDefault();
        document.querySelector('#detail').value = editor.getHTML();
        e.target.submit();
    });
</script>

<script>
    const imageUploadInput = document.querySelector('#image');
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
