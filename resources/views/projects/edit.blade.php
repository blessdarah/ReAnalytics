@extends('layouts.admin-dashboard')


@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
<x-form action="{{ route('projects.update', $project->id) }}" method="POST" buttonText="Update" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    @include('projects.form')
</x-form>

@endsection


@section('scripts')
<script>
    CKEDITOR.replace('detail');
</script>

@endsection
