@extends('layouts.admin-dashboard')

@section('content')
    <h3>Notifications</h3>
        <div data-simplebar>
            @foreach(auth()->user()->notifications as $notification)
            <a href="#!" class="text-reset notification-item">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                    </div>
                    <div class="flex-grow-1">
                        <p class="text-muted font-size-13 mb-0 float-end">{{$notification->data['id']}}</p>
                        <h6 class="mb-1">{{$notification->data['subject']}}</h6>
                        <div>
                            <p class="mb-0">from: {{$notification->data['from']}}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
@endsection
