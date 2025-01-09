@extends('admin.admin_master')

@section('admin-main')
    <div class="container">
       <div class="p-5">
        <h3>Add New Awesome Thing</h3> <!-- Optional: Add a title for the form -->

        <form action="{{ route('admin.awesome.store') }}" method="POST"> <!-- Correct route for storing -->
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="5" required></textarea> <!-- Optional: Set the number of rows -->
            </div>
            <button type="submit" class="m-3 btn btn-success">Save</button>
        </form>
    </div>
    </div>
@endsection
