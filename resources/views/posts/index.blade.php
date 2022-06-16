@extends('layouts.admin-dashboard')

@section('content')
<div class="card">
    <div class="card-body px-2">
    </div>
</div>


<power-grid-table-header title="Post list" :routeName="route('posts.index')" buttonText="Create">
    <livewire:posts-grid />
</power-grid-table-header>
@endsection
