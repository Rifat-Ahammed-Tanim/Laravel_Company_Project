@extends('admin.admin_master')

@section('admin-main')
    <div class="container">
        <div class="p-5">
            <h3>Create New Service</h3>
            <form action="{{ route('admin.services.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Service Title</label>
                    <input type="text" name="title" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="icon">Icon URL</label>
                    <input type="text" name="icon" class="form-control" required />
                </div>
                <button type="submit" class="btn btn-success">Create Service</button>
            </form>
        </div>
    </div>
@endsection
