@extends('layouts.dashboard')

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
            background-color: var(--orange);
            color: var(--light) !important;
        }

    </style>
@endsection

@section('content')
    @if (count($attachments) > 0)
        <div class="row">
            <div class="col-md-2">
                <a href="{{ route('attachments.create') }}" class="card bg-warning new-post">
                    <div class="card-body text-center align-items-center text-dark font-weight-bold">
                        <h1 class="mb-0">+</h1>
                        <p class="mb-0">New attachment</p>
                    </div>
                </a>
            </div>
        </div>
    @endif

    <div class="row">

        @forelse ($attachments as $attachment)
            <div class="col-md-4 mt-3">
                <div class="card hoverable">
                    <div class="card-body">
                        <p class="h3 card-title">{{ $attachment->name }}</p>
                    </div>
                    <div class="card-footer border-0 rounded-0">
                        <div class="btn-group">
                            <a href="{{ route('attachments.edit', $attachment->id) }}" class="btn btn-sm btn-info">preview</a>
                            <a href="{{ route('attachments.edit', $attachment->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('attachments.edit', $attachment->id) }}" class="btn btn-sm btn-danger"
                                data-action="{{ route('attachments.destroy', $attachment->id) }}" data-toggle="modal"
                                data-target="#delete-event" onclick="getButtonAction(event)">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            @include('includes.no-value')

            <a href="{{ route('attachments.create') }}" class="btn btn-primary btn-lg mx-auto">{{ __('New attachment') }}</a>
        @endforelse
    </div>

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
                            Are you sure you want to delete this service?
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
