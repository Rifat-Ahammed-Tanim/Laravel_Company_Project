@extends('admin.admin_master')

@section('admin-main')

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<div class="container">
    <div class="p-4">
        <h1>Edit Blog Card</h1>
        <form action="{{ route('blog_card.update', $blog_card->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <input type="hidden" value="{{ $blog_card->id }}" name="$blog_id">
            
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $blog_card->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $blog_card->description }}</textarea>
                <script>
                    CKEDITOR.replace('description',{
                        height: 500
                    });
                </script>
            </div>
            {{-- <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                <img src="{{ asset('upload/blog_images/' . $blog_card->image) }}" width="50" alt="Current Image">
            </div> --}}

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-control" >
                <label for="image" class="form-label">Current Image</label>
                <img src="{{ asset($blog_card->image) }}" width="200" alt="Current Image">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
