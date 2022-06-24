@extends('layouts.admin-dashboard')

@section('content')
<div class="row mt-5">
    @foreach ($events as $event)
    <div class="col-md-4">
        <div class="card hoverable">
            <img src="{{ asset($event->flyer) }}" alt="blog image" class="card-img-top">
            <div class="card-body">
                <p class="h3 card-title">{{ $event->name }}</p>
                <p class="card-text">{{ $event->description }}</p>
                <p class="card-text">{{ $event->start_date }}</p>
            </div>
            <div class="card-footer border-0 rounded-0">
                <div class="btn-group">
                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-danger" data-action="{{ route('events.destroy', $event->id) }}" data-toggle="modal" data-target="#delete-event" onclick="getButtonAction(event)">
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div> @endforeach
</div>
@endsection
