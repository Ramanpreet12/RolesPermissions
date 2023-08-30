@extends('backend.admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row profile-body">
            <div class="col-md-8 col-xl-12 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Add Amenity</h6>
                            <form id="amenity_form" class="forms-sample" method="POST" action="{{ route('admin.amenities.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                                <div class="form-group mb-3">
                                    <label for="amenity_name" class="form-label">Amenity Name</label>
                                    <input type="text" class="form-control" id="amenity_name" autocomplete="off"
                                        placeholder="Enter Amenity Name" name="amenity_name" value="{{ old('amenity_name') }}">
                                       @error('amenity_name')<span class="text-danger">{{ ($message) }}</span> @enderror
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

