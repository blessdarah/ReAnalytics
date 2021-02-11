@extends('layouts.dashboard')

@section('content')
    @if (count($contacts) > 0)
        <div class="card">
            <div class="card-header border-0 d-flex justify-content-between align-items-center">
                <p class="mb-0 font-weight-bold text-dark h4">Contact links</p>
                <a href="{{ route('contacts.create') }}" class="btn btn-sm btn-indigo" title="new link">
                    <i class="bx bx-link"></i>
                </a>
            </div>
            <ul class="list-group list-group-flush my-4">
                @foreach ($contacts as $contact)
                    <li class="list-group-item d-flex justify-content-between rounded-0 border-bottom">
                        <p class="mb-0 align-self-center">{{ $contact->name }}</p>
                        <div class="options">
                            <a href="{{ route('contacts.edit', $contact->id) }}"
                                class="btn btn-sm btn-success">{{ __('edit') }}</a>
                            <button class="btn btn-sm btn-primary"
                                data-action="{{ route('contacts.destroy', $contact->id) }}" data-toggle="modal"
                                data-target="#delete-contact" onclick="getButtonAction(event)">
                                {{ __('Delete') }}
                            </button>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        {{-- show no value --}}
        @include('includes.no-value')
        <div class="text-center">
            <a href="{{ route('contacts.create') }}" class="btn btn-primary btn-lg">New
                contact</a>
        </div>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="delete-contact" tabindex="-1" role="dialog" aria-labelledby="delete-contact"
        aria-hidden="true">
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
                        <div class="alert alert-primary">
                            Are you sure you want to delete this contact?
                            It will be <strong>permanently removed from</strong> your database.
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-sm btn-primary" onclick="destroy()">Yes! Delete</button>
                    <button type="button" class="btn btn-sm btn-indigo text-white" data-dismiss="modal">No, Cancel</button>
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
        console.log('working');
        const deleteForm = document.querySelector('#delete-form');
        let action;

        function destroy() {
            deleteForm.action = action;
            deleteForm.submit();
        }

        const getButtonAction = (event) => action = event.target.dataset.action;

    </script>
@endsection
