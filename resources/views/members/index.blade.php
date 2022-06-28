@extends('layouts.admin-dashboard')

@section('content')
    @if (count($members) < 1)
        {{-- show no value --}}
        @include('includes.no-value')
        <div class="text-center">
            <a href="{{ route('members.create') }}" class="btn btn-primary btn-lg">{{ __('Add new expert') }}</a>
        </div>
    @else
       <x-table-grid-container title="Team members" buttonText="Add member" routeName="{{route('members.create')}}">
    
        <div class="row">
            @foreach ($members as $member)
                <div class="col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ asset($member->image) }}" alt="blog image" class="card-img-top">
                        <div class="card-body">
                            <p class="h3 card-title">{{ $member->name }}</p>
                            <p class="card-text">{{ $member->position }} - {{ $member->company }}</p>
                            <p class="card-text">{{ $member->profile }}</p>
                        </div>
                        <div class="card-footer border-0 rounded-0">
                            <div class="d-inline-flex align-items-center">
                                <a href="{{ route('members.edit', $member->id) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                                <livewire:delete-button routeName="{{route('members.destroy', $member->id)}}" />
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </x-table-grid-container>

    @endif

@endsection