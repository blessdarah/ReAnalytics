@extends('layouts.admin-dashboard')

@section('content')
<x-form action="{{route('tags.store')}}" id="eventForm" method="POST">
    @include('tags.form')
</x-form>
@endsection

