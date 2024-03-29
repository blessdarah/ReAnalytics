@extends('layouts.admin-dashboard')

@section('styles')
<style>
    .new-post {
        transition: all 400ms ease-in-out !important;
    }

    .new-post:hover {
        box-shadow: 0 0 8px #18181822;
        text-decoration: none;
    }

    .new-post:hover .card-body {
        background-color: var(--indigo);
        color: var(--light) !important;
    }
</style>
@endsection

@section('content')
{{-- If now value, show the no value image --}}

@if (count($projects) < 1) {{-- show no value --}} @include('includes.no-value') <div class="text-center">
    <a href="{{ route('projects.create') }}" class="btn btn-primary btn-lg">{{ __('Add a project') }}</a>
    </div>
    @else
    {{-- Section header --}}
    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('projects.create') }}" class="card bg-success new-post">
                <div class="card-body text-center align-items-center text-light font-weight-bold">
                    <h1 class="mb-0">+</h1>
                    <p class="mb-0">{{ __('New project') }}</p>
                </div>
            </a>
        </div>
    </div>

    {{-- Content from the database --}}
    <div class="row mt-5">
        @foreach ($projects as $project)

        <div class="col-md-4">
            <div class="card hoverable">
                <img src="{{ asset($project->image) }}" alt="blog image" class="card-img-top">
                <div class="card-body">
                    <p class="h3 card-title">{{ $project->name }}</p>
                    <p class="card-text">{{ $project->summary }}</p>
                    <p class="card-text">{{ $project->start_date }}</p>
                </div>
                <div class="card-footer border-0 rounded-0 d-inline-flex">
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn mr-2 btn-sm btn-warning">Edit</a>
                    <livewire:delete-button routeName="{{route('projects.destroy', $project->id)}}" buttonText="delete" />
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    @endsection
