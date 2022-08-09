@extends('layouts.admin-dashboard')

@section('content')
@if (count($organizations) > 0)
<x-table-grid-container title="Organizations" routeName="{{route('organizations.create')}}" buttonText="New organization">
    <livewire:organizations-grid tableName="Organizations" />
</x-table-grid-container>

@else
{{-- show no value --}}
@include('includes.no-value')
<div class="text-center">
    <a href="{{ route('organizations.create') }}" class="btn btn-primary btn-lg">New
        organization</a>
</div>
@endif

@endsection
