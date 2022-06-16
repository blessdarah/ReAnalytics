@extends('layouts.admin-dashboard')

@section('content')
<div class="card">
    <div class="card-header py-2 d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Services</h6>
        <a class="btn btn-outline-primary" href="{{route('services.create')}}">
            <i class="bx bx-pencil"></i>
            Add service
        </a>
    </div>
    <div class="card-body px-2">
        <livewire:service-grid />
    </div>

</div>
@endsection
