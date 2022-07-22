@extends('layouts.admin-dashboard')

@section('content')
    <h5 class="text-danger">{{ucfirst($presidentsMessage->author)}}'s  Message</h5>
    <form id="messageForm" action="{{ route('messages.update', $presidentsMessage->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    @include('presidents-message.form')

    <div class="form-group mt-4">
        <button class="btn btn-primary" type="submit">Save</button>
    </div>
</form>

@endsection
@section('scripts')
<script>
    const Editor = toastui.Editor;
    const oldContent = `{!! Str::markdown($presidentsMessage->body) !!}`;
    const editor = new Editor({
        el: document.querySelector('#editor'),
        height: '400px',
        // initialEditType: 'markdown',
        initialEditType: 'wysiwyg',
        initialValue: oldContent
        // placeholder: 'Write something cool!',
    });

    document.querySelector('#messageForm').addEventListener('submit', e => {
        e.preventDefault();
        document.querySelector('#body').value = editor.getMarkdown();
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
