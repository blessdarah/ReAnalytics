@extends('layouts.dashboard')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="{{ route('posts.store') }}" method="POST" class="form" enctype="multipart/form-data">
        @csrf

        @include('posts.form')

        <div class="form-group mt-4">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{ route('files.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
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
@endsection
