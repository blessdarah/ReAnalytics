@extends('layouts.admin-dashboard')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
<x-form action="{{ route('posts.store') }}" id="postForm" method="POST" class="form" enctype="multipart/form-data">
    @include('posts.form')
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
        customHTMLRenderer: {
            htmlBlock: {
            iframe(node) {
                return [
                { type: 'openTag', tagName: 'iframe', outerNewLine: true, attributes: node.attrs },
                { type: 'html', content: node.childrenHTML },
                { type: 'closeTag', tagName: 'iframe', outerNewLine: true },
                ];
            },
        }
  },
    });

    document.querySelector('#postForm').addEventListener('submit', e => {
        e.preventDefault();
        document.querySelector('#content').value = editor.getHTML();
        e.target.submit();
    });
</script>

<script>
    const postTitle = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    const published = document.querySelector('#publish-true');
    const pubDate = document.querySelector('#published_on');

    postTitle.addEventListener('blur', event => {
        slug.value = event.target.value.toLowerCase().split(" ").join("-");
    })

    published.addEventListener('change', event => {
        if (published.checked) {
            console.log('checked');
        }
    })
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
