@extends('layouts.admin-dashboard')

@section('content')
<x-table-grid-container title="Clients" routeName="{{route('clients.create')}}" buttonText="New client">
    <livewire:client-table />
</x-table-grid-container>

@endsection
