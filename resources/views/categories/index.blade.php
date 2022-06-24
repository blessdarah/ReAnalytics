@extends('layouts.admin-dashboard')

@section('content')
@if (count($categories) > 0)
<x-table-grid-container title="Categories" routeName="{{route('categories.create')}}" buttonText="New category">
    <livewire:categories-grid tableName="Categories" />
</x-table-grid-container>

@else
{{-- show no value --}}
@include('includes.no-value')
<div class="text-center">
    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-lg">New
        category</a>
</div>
@endif

@endsection
