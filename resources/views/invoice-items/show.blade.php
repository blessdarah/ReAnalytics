@extends('layouts.admin-dashboard')

@section('content')
<div class="card">
    <div class="card-header">
    <div class="row">
        <div class="col-md-8">
            <h4 class="card-title">{{$invoice->name}}</h4>
            <p class="small">{{$invoice->code}}</p>
            <p>Client: {{$invoice->client()->name ?? 'Unknown client'}}</p>
            <p>Total cost: {{$invoice->total }}</p>
        </div>
        <div class="col-md-4">
            @php
                $status = [
                    "paid" => "bg-success text-white",
                    "pending" => "bg-warning text-dark",
                    "cancelled" => "bg-danger text-white"
                ];
            @endphp
            <p>status: <span class="badge {{$status[$invoice->status]}}">{{$invoice->status}}</span></p>
            <p>Date: {{$invoice->created_at->format('d/M/Y')}}</p>
            <a href="{{route('invoices.edit', $invoice->id)}}" class="btn btn-sm btn-outline-primary">
                <i class="bx bx-pencil"></i>
                Edit
            </a>
        </div>
    </div>
    </div><!-- end card header -->

    <div class="card-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">
                    <i class="bx bx-table"></i>
                    <span>Invoice items</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false">
                    <i class="bx bx-table"></i>
                    <span>Add invoice item</span>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-3 text-muted">
            <div class="tab-pane active" id="home" role="tabpanel">
                <p class="mb-0">
                    Invoice items here
                </p>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel">
                <p class="mb-0">Invoice item form here</p>
            </div>
        </div>
    </div><!-- end card-body -->
</div>


@endsection

