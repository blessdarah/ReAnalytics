@extends('layouts.admin-dashboard')

@section('content')
<x-table-grid-container title="Post list" routeName="{{route('posts.create')}}" buttonText="Create post">
    <livewire:posts-grid />
</x-table-grid-container>

@endsection
