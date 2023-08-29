@extends('backend.admin.admin_dashboard')

@section('admin')
    <div class="page-content">

        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            {{-- <h6 class="card-title mb-0">About</h6> --}}
                            <div>
                                <img class="wd-70 rounded-circle"
                                src="{{ (!empty($profile_data->photo)) ? url('uploads/admin_images/'.$profile_data->photo) : url('uploads/no_image.jpg') }}" alt="profile">
                                <span class="h4 ms-3">{{ $profile_data->username }}</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                            <p class="text-muted">{{ $profile_data->name }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{ $profile_data->email }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                            <p class="text-muted">{{ $profile_data->phone }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                            <p class="text-muted">{{ $profile_data->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Update Password</h6>
                            <form class="forms-sample" method="POST" action="{{ route('admin.update-password') }}"
                            enctype="multipart/form-data">
                            @csrf
                                <div class="mb-3">
                                    <label for="old_password" class="form-label">Old Password</label>
                                    <input type="text" class="form-control @error('old_password') is-invalid @enderror" id="old_password" autocomplete="off"
                                        placeholder="Enter Old Password" name="old_password" >
                                       @error('old_password')<span class="text-danger">{{ ($message) }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="text" class="form-control @error('new_password') is-invalid @enderror" id="new_password" autocomplete="off"
                                        placeholder="Enter New Password" name="new_password" >
                                        @error('new_password')<span class="text-danger">{{ ($message) }}</span> @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                    <input type="text" class="form-control" id="new_password_confirmation" autocomplete="off"
                                        placeholder="Re-enter New Password" name="new_password_confirmation" >
                                        @error('new_password_confirmation')<span class="text-danger">{{ ($message) }}</span> @enderror
                                </div>

                                <button type="submit" class="btn btn-primary me-2 mt-2">Save Changes</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection
