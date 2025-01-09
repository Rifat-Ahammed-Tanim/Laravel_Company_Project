@extends('admin.admin_master')

@include('sweetalert::alert')

@section('admin-main')


    <div class="container w-100">
        <div class="m-4">
            <h1>Blog Cards</h1>
            <a href="{{ route('blog_card.create') }}" class="mb-3 btn btn-primary">Add New Blog Card</a>
            <table class="table table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blog_card as $card)
                    
                        <tr>
                            <td>{{ $card->id }}</td>
                            <td>{{ $card->title }}</td>
                            <td>{!! $card->description !!}</td> 
                            <td>Read More Page Details</td>
                            <td>
                                <img src="{{asset( $card->image )}}" width="50" alt="Blog Image">
                            </td>
                            <td class="d-flex gap-lg-3">
                                <a href="{{ route('blog_card.edit', $card->id) }}" class="btn btn-info">Edit</a>
                                <form action="{{ route('blog_card.destroy', $card->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    {{ $blog_card->links() }}

                </tbody>
            </table>
        </div>
    </div>
@endsection
