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
                            <div class="card-title">About Who We Are</div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('about.whoWeAre.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="Enter Title" value="{{ $who_we_are->title }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="sub_title"> Sub Title</label>
                                            <input type="text" name="sub_title" class="form-control" id="sub_title"
                                                placeholder="Enter Sub Title" value="{{ $who_we_are->sub_title }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea type="text" name="description" class="form-control" id="description" cols="30" rows="10"
                                                placeholder="Enter Description" value="{{ $who_we_are->description }}">{{ $who_we_are->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Existing image</label>
                                            <img src="{{ asset($who_we_are->image) }}" alt="" style="width: 100px;">
                                        </div>
                                        <div class="form-group">
                                            <label for="image">New image</label>
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
