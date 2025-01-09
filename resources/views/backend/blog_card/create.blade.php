@extends('admin.admin_master')

@section('admin-main')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>



    <div class="container">
        <div class="p-4">
            <h1>Add New Blog Card</h1>
            <form action="{{ route('blog_card.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                    <script>
                        CKEDITOR.replace('description');
                    </script>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control" >
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
