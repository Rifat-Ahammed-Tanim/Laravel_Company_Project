@extends('admin.admin_master')

@section('admin-main')
    <div class="container">

        <div class="m-5 rounded shadow-lg bg-light">
            <div class="p-5">
                <h2>QA Harbor's Free QA Consultation Submissions</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Submitted At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($homeForms as $homeForm)
                        <tr>
                            <td>{{ $homeForm->name }}</td>
                            <td>{{ $homeForm->email }}</td>
                            <td>{{ $homeForm->message }}</td>
                            <td>{{ $homeForm->created_at->format('d M Y, H:i') }}</td>
                            <td>
                                <form action="{{ route('qaConsultation.delete', $homeForm->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this submission?');">
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

    </div>
@endsection
