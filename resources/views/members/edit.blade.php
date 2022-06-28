@extends('layouts.admin-dashboard')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <x-form action="{{ route('members.update', $member->id) }}" method="PATCH" class="form" enctype="multipart/form-data">
        @include('members.form')
    </x-form>

@endsection

@section('scripts')

@endsection
