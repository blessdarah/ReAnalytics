@extends('layouts.admin-dashboard')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif

<x-form action="{{route('events.store')}}" id="eventForm" method="POST" enctype="multipart/form-data">
    @include('events.form')
</x-form>
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

    document.querySelector('#eventForm').addEventListener('submit', e => {
        e.preventDefault();
        document.querySelector('#description').value = editor.getHTML();
        e.target.submit();
    });
</script>
<script>
    const imageUploadInput = document.querySelector('#flyer');
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
