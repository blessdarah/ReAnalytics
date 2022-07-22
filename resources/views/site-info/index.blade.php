@extends('layouts.admin-dashboard')

@section('content')

@if(isset($siteInfo))
<form action="{{route('site-info.update', $siteInfo->id)}}" method="POST" enctype="multipart/form-data" id="siteInfoForm">
    @csrf
    @method('PATCH')
    @else
    <form action="{{route('site-info.store')}}" method="POST" enctype="multipart/form-data" id="siteInfoForm">
        @csrf
        @endif

        @include('site-info.form')

        <button class="btn btn-primary">Save</button>
    </form>
    @endsection

    @section('scripts')
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
