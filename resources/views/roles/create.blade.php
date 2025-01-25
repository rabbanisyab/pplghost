@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Role</h1>
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Role Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <button type="submit" class="btn btn-success mt-3">Create Role</button>
        </form>
    </div>
@endsection
