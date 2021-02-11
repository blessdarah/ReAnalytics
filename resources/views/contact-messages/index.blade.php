@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h4 class="text-dark mb-3">Contact messages</h4>
        @forelse ($contactMessages as $contactMessage)
            <ul class="list-group">
                <li class="list-group-item">
                    <p class="font-weight-bold text-secondary mb-0">Sender's name: {{ $contactMessage->name }}</p>
                    <p class="font-weight-bold text-secondary mb-0">Email: {{ $contactMessage->email }}</p>
                    <p class="text-secondary"><strong><u>Message:</u></strong><br>{{ $contactMessage->message }}</p>
                    <span class="badge badge-warning">{{ $contactMessage->created_at }}</span>
                </li>
            </ul>
        @empty
            <div class="alert alert-primary">
                <p class="text-center">No contact message has been submitted</p>
            </div>
        @endforelse
    </div>
@endsection
