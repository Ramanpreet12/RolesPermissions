@extends('backend.admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row profile-body">
            <div class="col-md-8 col-xl-12 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Add Property Type</h6>
                            <form class="forms-sample" method="POST" action="{{ route('admin.all-types.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                                <div class="mb-3">
                                    <label for="type_name" class="form-label">Type Name</label>
                                    <input type="text" class="form-control @error('type_name') is-invalid @enderror" id="type_name" autocomplete="off"
                                        placeholder="Enter Old Password" name="type_name" >
                                       @error('type_name')<span class="text-danger">{{ ($message) }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="type_icon" class="form-label">Type Icon</label>
                                    <input type="text" class="form-control @error('type_icon') is-invalid @enderror" id="type_icon" autocomplete="off"
                                        placeholder="Enter Old Password" name="type_icon" >
                                       @error('type_icon')<span class="text-danger">{{ ($message) }}</span> @enderror
                                </div>
                                <button type="submit" class="btn btn-primary me-2 mt-2">Add</button>
                                <button class="btn btn-secondary mt-2">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
