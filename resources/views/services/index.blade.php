@extends('layouts.admin-dashboard')

@section('content')
<x-table-grid-container title="Services" routeName="{{route('services.create')}}" buttonText="New service">
    <livewire:service-grid />
</x-table-grid-container>

@endsection
