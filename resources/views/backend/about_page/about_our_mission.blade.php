{{-- @extends('admin.admin_master')

@section('admin-main')
<div class="container">
    <h1>Mission successfully</h1>
</div>
@endsection --}}
@extends('admin.admin_master')

@section('admin-main')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Forms</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Our Mission</div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.our_mission-update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="Enter Title" value="{{  $our_mission->title }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle"> Sub Title</label>
                                            <input type="text" name="sub_title" class="form-control" id="subtitle"
                                            placeholder="Enter Sub Title" value="{{ $our_mission->sub_title }}" />
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea type="text" name="description" class="form-control" id="description" cols="30" rows="10"
                                                placeholder="Enter Description" value="{{ $our_mission->description }}">{{ $our_mission->description }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Existing Image</label>
                                            <img src="{{ asset($our_mission->image) }}" alt=""
                                            style="width: 100px;">
                                        </div>

                                        <div class="form-group">
                                            <label for="image">New Image</label>
                                            <input type="file" name="image" class="form-control-file" id="image" />
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
