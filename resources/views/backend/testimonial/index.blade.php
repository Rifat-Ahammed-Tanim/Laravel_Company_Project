@extends('admin.admin_master')

@include('sweetalert::alert')

@section('admin-main')
<div class="container">
    <h1 class="p-4">Testimonials</h1>
    <a href="{{ route('admin.testimonials.create') }}" class="mx-4 mb-4 btn btn-primary">Add Testimonial</a>


    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Message</th>
                    <th>Position</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $testimonial)
                    <tr>
                        <td class="text-capitalize">{{ $testimonial->name }}</td>
                        <td class="text-capitalize">{{ $testimonial->message }}</td>
                        <td class="text-capitalize">{{ $testimonial->position }}</td>
                        <td>
                            <img src="{{ asset($testimonial->image) }}" height="90">
                        </td>
                        <td class="d-flex ">
                            <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="mx-4 btn btn-warning">Edit</a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

