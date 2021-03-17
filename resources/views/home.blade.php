@extends('layouts.dashboard')

@section('stats')
    {{-- stats counters --}}
    <div class="row mb-4 text-uppercase">
        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-header bg-primary rounded-0 border-0 py-1"></div>
                <div class="card-body">
                    <i class="bx bx-file-blank"></i>
                    Post count<br>
                    {{ count($posts) }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-header bg-success rounded-0 border-0 py-1"></div>
                <div class="card-body">
                    <i class="bx bx-gift"></i>
                    Services<br>
                    {{ count($services) }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-header bg-warning rounded-0 border-0 py-1"></div>
                <div class="card-body">
                    <i class="bx bx-video"></i>
                    Videos<br>
                    {{ count($videos) }}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-header bg-danger rounded-0 border-0 py-1"></div>
                <div class="card-body">
                    Events
                    {{-- {{ count($events) }} --}}
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        {{-- manage users here --}}
        <div class="col-md-7">
            <div class="card border-0 bg-white shadow-sm px-0 mt-5">
                <div
                    class="card-header rounded-0 border-0 bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Manage Users</h3>
                    <button class="btn btn-sm btn-light shadow p-2">+ new user</button>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item mb-3 px-0 d-flex justify-content-between align-items-center">
                            <p class="mb-0 font-weight-bold">John Doe</p>
                            <span class="badge badge-info rounded-0">Editor</span>
                        </li>
                        <li class="list-group-item mb-3 px-0 d-flex justify-content-between align-items-center">
                            <p class="mb-0 font-weight-bold">Willy Sandez</p>
                            <span class="badge badge-info rounded-0">Editor</span>
                        </li>
                        <li class="list-group-item mb-3 px-0 d-flex justify-content-between align-items-center">
                            <p class="mb-0 font-weight-bold">Christy Lee</p>
                            <span class="badge badge-warning rounded-0">admin</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- manage tags --}}
        <div class="col-md-5">
            <div class="card border-0 bg-white shadow-sm px-0 mt-5">
                <div
                    class="card-header rounded-0 border-0 bg-warning text-white d-flex justify-content-between align-items-center">
                    <h3 class="card-title text-dark">Manage Tags</h3>
                    <button class="btn btn-sm btn-light shadow p-2" id="new-tag" data-toggle="collapse"
                        data-target="#tag-form" aria-expanded="false" aria-controls="tag-form">+ new tag</button>
                </div>
                <div class="collapse pb-0" id="tag-form">
                    <form action="{{ route('tags.store') }}" method="POST" data-route="{{ route('tags.store') }}"
                        data-mode="store">
                        @csrf

                        <div class="form-group px-3 py-1">
                            <input type="text" name="name" id="tag-name" class="form-control"
                                placeholder="Add new tag and press enter to add">
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    @foreach ($tags as $tag)
                        <a href="#" class="tag badge badge-light hoverable py-2 px-4 rounded-0 text-secondary mb-1"
                            data-tag-route="{{ route('tags.update', $tag->id) }}">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <form action="" method="POST" id="update-tag-form">
        @csrf
        @method('PATCH')
        <input type="hidden" name="tag" id="tag-update">
    </form>
@endsection

@section('scripts')
    <script>
        const tagForm = document.querySelector('#tag-form');
        const updateTagForm = document.querySelector('#update-tag-form');
        const newTagBtn = document.querySelector('#new-tag');
        const tags = Array.from(document.querySelectorAll('.tag'));
        let tagInput = tagForm.querySelector('#tag-name');

        tags.forEach(tag => tag.addEventListener('click', (event) => {
            event.preventDefault();
            tagForm.dataset.mode = 'update';
            tagRoute = event.target.dataset.tagRoute;
            tagForm.parentElement.classList.add('show');


            tagForm.querySelector('.patch').classList.remove('d-none');
            tagInput.value = event.target.textContent.trim();
            tagForm.action = tagRoute;
        }))

        newTagBtn.addEventListener('click', () => {
            tagForm.action = tagForm.dataset.route;
            tagForm.querySelector('.patch').classList.add('d-none');
            tagInput.value = '';
        });

    </script>
@endsection
