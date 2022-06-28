@extends('layouts.admin-dashboard')

@section('content')
<h3>Edit tag</h3>
<x-form action="{{ route('tags.update', $tag->id) }}" method="POST" buttonText="Update">
    @csrf
    @method('PATCH')
    @include('tags.form')
</x-form>

@endsection
