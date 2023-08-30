@extends('backend.admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row profile-body">
            <div class="col-md-8 col-xl-12 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Permission</h6>
                            <form id="permission_form" class="forms-sample" method="POST" action="{{ route('admin.permissions.update' , $permission->id) }}"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Permission Name</label>
                                    <input type="text" class="form-control" id="name" autocomplete="off"
                                        placeholder="Enter Amenity Name" name="name" value="{{ $permission->name }}">
                                       @error('name')<span class="text-danger">{{ ($message) }}</span> @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="group_name" class="form-label">Group Name</label>
                                    <select name="group_name" id="group_name" class="form-control">
                                        <option value="">select</option>
                                        <option value="property_type" @if($permission->group_name == 'property_type') selected @endif>Property Type</option>
                                        <option value="amenities"  @if($permission->group_name == 'amenities') selected @endif>Amenities</option>
                                    </select>
                                       @error('group_name')<span class="text-danger">{{ ($message) }}</span> @enderror
                                </div>


                                <button type="submit" class="btn btn-primary me-2 mt-2">Update</button>
                                <button class="btn btn-secondary mt-2">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

