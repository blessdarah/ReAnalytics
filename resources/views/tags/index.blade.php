@extends('layouts.admin-dashboard')

@section('content')

@if(count($tags) > 0)
<x-table-grid-container title="Tags" buttonText="Create tag" routeName="{{route('tags.create')}}">
    <livewire:tags-table />
</x-table-grid-container>
@else

@include('includes.no-value')
<div class="text-center">
    <a href="{{ route('tags.create') }}" class="btn btn-primary btn-lg">{{ __('Add new tag') }}</a>
</div>
@endif

@endsection
