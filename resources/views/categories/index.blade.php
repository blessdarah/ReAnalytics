@extends('layouts.admin-dashboard')

@section('content')
@if (count($categories) > 0)
<div class="card">
    <div class="card-body px-2">
        <livewire:categories-grid tableName="Categories"/>
    </div>
</div>
@else
{{-- show no value --}}
@include('includes.no-value')
<div class="text-center">
    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-lg">New
        category</a>
</div>
@endif

<!-- Modal -->
<div class="modal fade" id="delete-category" tabindex="-1" role="dialog" aria-labelledby="delete-category" aria-hidden="true">
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
                        Are you sure you want to delete this category?
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
