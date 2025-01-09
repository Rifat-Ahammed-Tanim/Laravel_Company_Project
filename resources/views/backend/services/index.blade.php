@extends('admin.admin_master')

@section('admin-main')
    <div class="container m-5">
        <h3>Services</h3>
        <a href="{{ route('admin.services.create') }}" class="mb-3 btn btn-primary">Add New Service</a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Icon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->description }}</td>
                            <td>

                                <i class="{{ $service->icon }} fa-2x" style="color: inherit; font-size: 24px;"></i>
                                
                            </td>
                            <td>
                                <a href="{{ route('admin.services.edit', $service->id) }}"
                                    class="m-2 btn btn-warning">Edit</a>
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST"
                                    style="display:inline;">
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
