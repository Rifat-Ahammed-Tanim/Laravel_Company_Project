@extends('admin.admin_master')

@section('admin-main')
    <div class="container">
        <h1 class="m-3">Add Testimonial</h1>

        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="m-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="m-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" class="form-control" required></textarea>
            </div>

            <div class="m-3">
                <label for="position" class="form-label">Position</label>
                <select name="position" class="form-control" value="">
                    <option selected value="client">Client</option>
                    <option selected value="client">Employee</option>
                </select>
            </div>

            <div class="m-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="m-3 btn btn-success">Add Testimonial</button>
        </form>
    </div>
@endsection
