@extends('admin.admin_master')

@section('admin-main')
    <div class="container">
        <form action="{{ route('admin.awesome.update', $awesomeThing->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $awesomeThing->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required>{{ $awesomeThing->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success mx-4">Update</button>
        </form>
    </div>
@endsection
