@extends('layouts.admin-dashboard')

@section('content')
<div class="container">
    <h4 class="text-dark mb-3">Contact messages</h4>
    @forelse ($contactMessages as $contactMessage)
    <div class="card">
        <div class="card-body">
            <blockquote class="blockquote font-size-14 mb-0">
                <h6>{{$contactMessage->subject}}</h6>
                <p>{{$contactMessage->message}}</p>
                <footer class="blockquote-footer mt-0 font-size-12">
                    <span>{{$contactMessage->name}}</span><br />
                    <span>{{$contactMessage->email}}</span>
                </footer>
            </blockquote>
        </div>
    </div>
    @empty
    <div class="alert alert-primary">
        <p class="text-center">No contact message has been submitted</p>
    </div>
    @endforelse
</div>
@endsection
