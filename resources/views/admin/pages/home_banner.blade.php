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
                            <div class="card-title">Home Banner</div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.home-banner-update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control" id="title"
                                                placeholder="Enter Title" value="{{ $home_banner->title }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle"> Sub Title</label>
                                            <input type="text" name="sub_title" class="form-control" id="subtitle"
                                                placeholder="Enter Sub Title" value="{{ $home_banner->sub_title }}" />
                                        </div>

                                        <div class="form-group">
                                            <label for="photo">Existing Photo</label>
                                            <img src="{{ asset($home_banner->photo) }}" alt=""
                                                style="width: 100px;">
                                        </div>

                                        <div class="form-group">
                                            <label for="photo">New Photo</label>
                                            <input type="file" name="photo" class="form-control-file" id="photo" />
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
