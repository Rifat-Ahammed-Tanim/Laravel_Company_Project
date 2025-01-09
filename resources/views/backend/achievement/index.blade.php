@extends('admin.admin_master')

@include('sweetalert::alert')

@section('admin-main')
<div class="container">
    <h2 class="m-5">Achievements Section</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('backend.achievement.update') }}" method="POST">
        @csrf
        <div class="m-4 row">
            @foreach ($achievements as $achievement)
                <div class="col-md-6">
                    <!-- Input for Title (h2) -->
                    <h2 class="text-light">
                        <input 
                            type="text" 
                            name="achievements[{{ $achievement->id }}][title]" 
                            value="{{ $achievement->title }}" 
                            placeholder="Title {{ $loop->index + 1 }}" 
                            required
                        >
                    </h2>
                    <!-- Input for Description (p) -->
                    <p class="text-danger">
                        <input 
                            type="text" 
                            name="achievements[{{ $achievement->id }}][description]" 
                            value="{{ $achievement->description }}" 
                            placeholder="Description {{ $loop->index + 1 }}" 
                            required
                        >
                    </p>
                </div>
            @endforeach
        </div>
        <button type="submit" class="m-5 btn btn-primary">Update Achievements</button>
    </form>
</div>
@endsection
