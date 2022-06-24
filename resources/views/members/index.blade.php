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
    @if (count($members) < 1)
        {{-- show no value --}}
        @include('includes.no-value')
        <div class="text-center">
            <a href="{{ route('members.create') }}" class="btn btn-primary btn-lg">{{ __('Add new expert') }}</a>
        </div>
    @else
        <div class="row">
            <div class="col-md-2">
                <a href="{{ route('members.create') }}" class="card bg-success new-post">
                    <div class="card-body text-center align-items-center text-light font-weight-bold">
                        <h1 class="mb-0">+</h1>
                        <p class="mb-0">New member</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-5">
            @foreach ($members as $member)

                <div class="col-md-4">
                    <div class="card hoverable">
                        <img src="{{ asset($member->image) }}" alt="blog image" class="card-img-top">
                        <div class="card-body">
                            <p class="h3 card-title">{{ $member->name }}</p>
                            <p class="card-text">{{ $member->position }} - {{ $member->company }}</p>
                            <p class="card-text">{{ $member->profile }}</p>
                        </div>
                        <div class="card-footer border-0 rounded-0">
                            <div class="btn-group">
                                <a href="{{ route('members.edit', $member->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('members.edit', $member->id) }}" class="btn btn-sm btn-danger"
                                    data-action="{{ route('members.destroy', $member->id) }}" data-toggle="modal"
                                    data-target="#delete-event" onclick="getButtonAction(event)">
                                    Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    {{-- modal --}}

    <!-- Modal -->
    <div class="modal fade" id="delete-event" tabindex="-1" role="dialog" aria-labelledby="delete-event" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content shadow">
                <div class="modal-header border-0">
                    <h5 class="modal-title">Notice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb-0">
                    <div class="container-fluid">
                        <div class="alert alert-danger">
                            Are you sure you want to delete this member?
                            It will be <strong>permanently removed from</strong> your database
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-sm btn-danger" onclick="destroy(event)">Yes! Delete</button>
                    <button type="button" class="btn btn-sm btn-indigo" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- delete form --}}
    <form action="" method="POST" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
@endsection

@section('scripts')
    <script>
        const deleteForm = document.querySelector('#delete-form');
        let action;

        function destroy(event) {
            deleteForm.action = action;
            deleteForm.submit();
        }

        const getButtonAction = (event) => action = event.target.dataset.action;

    </script>
@endsection
