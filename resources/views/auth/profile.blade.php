@extends('layouts.admin-dashboard')

@section('content')

<div class="card rounded border">
    <div class="card-header bg-primary text-white">
        <div class="card-title mb-0 font-weight-bold text-capitalize">your profile</div>
    </div>
    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Username:</strong> {{ Auth::user()->name }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ Auth::user()->email }}</li>
        </ul>
    </div>
    <div class="card-footer">
        <a class="btn btn-success btn-sm text-white"><i class="bx bx-pencil"></i> edit</a>
        <a class="btn btn-warning btn-sm ml-3"><i class="bx bx-lock"></i> change password</a>
    </div>
</div>

<div class="card rounded border">
    <div class="card-header bg-primary text-white">
        <div class="card-title mb-0 font-weight-bold text-capitalize">Manage password</div>
    </div>
    <form action=""  class="card-body p-0" method="POST">
        @csrf
        <div class="form-group">
            <label for="oldPassword">Old password</label>
            <input type="password" name="oldPassword" required>
        </div>
        <div class="form-group">
            <label for="oldPassword">New password</label>
            <input type="password" name="newPassword" required>
        </div>
        <div class="form-group">
            <label for="oldPassword">Confirm password</label>
            <input type="password" name="passwordConfirm">
        </div>
        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
    </form>
</div>
@endsection
