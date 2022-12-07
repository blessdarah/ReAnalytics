@extends('layouts.admin-dashboard')

@section('content')
<x-table-grid-container title="Invoices" routeName="{{route('invoices.create')}}" buttonText="New invoice">
    <livewire:invoice-table />
</x-table-grid-container>

@endsection
