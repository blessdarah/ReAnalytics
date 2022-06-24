@extends('layouts.admin-dashboard')


@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
<x-form action="{{ route('events.update', $event->id) }}" id="eventForm" method="POST" enctype="multipart/form-data" buttonText="Update">
    @include('events.form')
</x-form>

@endsection
