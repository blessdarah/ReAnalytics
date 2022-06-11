@extends('layouts.admin-dashboard')

@section('styles')
    <style>
        .new-post {
            transition: all 400ms ease-in-out !important;
        }

        .new-post:hover {
            box-shadow: 0 0 8px #3b2e2e22;
            text-decoration: none;
        }

        .new-post:hover .card-body {
            background-color: var(--blue);
            color: var(--light) !important;
        }

    </style>
@endsection

@section('content')
    @if (count($posts) < 1)
        {{-- show no value --}}
        @include('includes.no-value')
        <div class="text-center">
            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg">{{ __('Create new post') }}</a>
        </div>
    @else
        <div class="row">
            <div class="col-md-2">
                <a href="{{ route('posts.create') }}" class="card bg-info new-post">
                    <div class="card-body text-center align-items-center text-light font-weight-bold">
                        <h1 class="mb-0">+</h1>
                        <p class="mb-0">New post</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="card border-0 w-100">
                <div class="card-body">
                    <table class="table table-rounded table-striped table-responsive-sm border rounded">
                        <thead>
                            <tr>
                                <th>image</th>
                                <th>title</th>
                                <th>summary</th>
                                <th>options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td><img src="{{ asset($post->image) }}" alt="blog image" class="img-fluid" width="100">
                                    </td>
                                    <td>
                                        <p class="h3 card-title">{{ $post->title }}</p>
                                    </td>
                                    <td>
                                        <p class="card-text">{{ $post->summary }}</p>
                                    </td>
                                    <td>
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-danger rounded"
                                            title="edit"><i class="bx bx-pencil"></i></a>

                                        <button class="btn btn-sm btn-primary" title="delete post"
                                            data-action="{{ route('posts.destroy', $post->id) }}" data-toggle="modal"
                                            data-target="#delete-post" onclick="getButtonAction(event)">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="delete-post" tabindex="-1" role="dialog" aria-labelledby="delete-post" aria-hidden="true">
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
                            Are you sure you want to delete this post?
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
        const deleteForm = document.querySelector('#delete-form');
        let action;

        function destroy() {
            deleteForm.action = action;
            deleteForm.submit();
        }

        const getButtonAction = (event) => action = event.target.dataset.action;

    </script>
@endsection
