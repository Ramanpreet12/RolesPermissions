@extends('backend.admin.admin_dashboard')

@section('admin')
    <div class="page-content">

        {{-- <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="position-relative">
                    <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                        <img src="https://via.placeholder.com/1560x370" class="rounded-top"
                            alt="profile cover">
                    </figure>
                    <div
                        class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                        <div>
                            <img class="wd-70 rounded-circle" src="https://via.placeholder.com/100x100"
                                alt="profile">
                            <span class="h4 ms-3 text-dark">Amiah Burton</span>
                        </div>
                        <div class="d-none d-md-block">
                            <button class="btn btn-primary btn-icon-text">
                                <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                            </button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center p-3 rounded-bottom">
                    <ul class="d-flex align-items-center m-0 p-0">
                        <li class="d-flex align-items-center active">
                            <i class="me-1 icon-md text-primary" data-feather="columns"></i>
                            <a class="pt-1px d-none d-md-block text-primary" href="#">Timeline</a>
                        </li>
                        <li class="ms-3 ps-3 border-start d-flex align-items-center">
                            <i class="me-1 icon-md" data-feather="user"></i>
                            <a class="pt-1px d-none d-md-block text-body" href="#">About</a>
                        </li>
                        <li class="ms-3 ps-3 border-start d-flex align-items-center">
                            <i class="me-1 icon-md" data-feather="users"></i>
                            <a class="pt-1px d-none d-md-block text-body" href="#">Friends <span
                                    class="text-muted tx-12">3,765</span></a>
                        </li>
                        <li class="ms-3 ps-3 border-start d-flex align-items-center">
                            <i class="me-1 icon-md" data-feather="image"></i>
                            <a class="pt-1px d-none d-md-block text-body" href="#">Photos</a>
                        </li>
                        <li class="ms-3 ps-3 border-start d-flex align-items-center">
                            <i class="me-1 icon-md" data-feather="video"></i>
                            <a class="pt-1px d-none d-md-block text-body" href="#">Videos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
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
                            {{-- <div class="dropdown">
                                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="edit-2" class="icon-sm me-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="git-branch" class="icon-sm me-2"></i> <span
                                            class="">Update</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="eye" class="icon-sm me-2"></i> <span class="">View
                                            all</span></a>
                                </div>
                            </div> --}}
                        </div>
                        {{-- <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and
                            quality of Social.</p> --}}
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
                        {{-- <div class="mt-3 d-flex social-links">
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="github"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="instagram"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    {{-- <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="img-xs rounded-circle"
                                        src="https://via.placeholder.com/37x37" alt="">
                                    <div class="ms-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">1 min ago</p>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-lg pb-3px" data-feather="more-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="javascript:;"><i data-feather="meh"
                                                class="icon-sm me-2"></i> <span class="">Unfollow</span></a>
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="javascript:;"><i data-feather="corner-right-up"
                                                class="icon-sm me-2"></i> <span class="">Go to
                                                post</span></a>
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="javascript:;"><i data-feather="share-2"
                                                class="icon-sm me-2"></i> <span class="">Share</span></a>
                                        <a class="dropdown-item d-flex align-items-center"
                                            href="javascript:;"><i data-feather="copy"
                                                class="icon-sm me-2"></i> <span class="">Copy
                                                link</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
                            <img class="img-fluid" src="https://via.placeholder.com/689x430" alt="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex post-actions">
                                <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                    <i class="icon-md" data-feather="heart"></i>
                                    <p class="d-none d-md-block ms-2">Like</p>
                                </a>
                                <a href="javascript:;" class="d-flex align-items-center text-muted me-4">
                                    <i class="icon-md" data-feather="message-square"></i>
                                    <p class="d-none d-md-block ms-2">Comment</p>
                                </a>
                                <a href="javascript:;" class="d-flex align-items-center text-muted">
                                    <i class="icon-md" data-feather="share"></i>
                                    <p class="d-none d-md-block ms-2">Share</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                    <div class="card">
                        <div class="card-body">

                            <h6 class="card-title">Update Profile</h6>

                            <form class="forms-sample" method="POST" action="{{ route('admin.profile.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" autocomplete="off"
                                        placeholder="Username" name="username" value="{{ $profile_data->username }}">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" autocomplete="off"
                                        placeholder="name" name="name" value="{{ $profile_data->name }}">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email"
                                    name="email" value="{{ $profile_data->email }}">
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" autocomplete="off"
                                        placeholder="Phone" name="phone" value="{{ $profile_data->phone }}">
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                   <textarea name="address" id="" class="form-control"   rows="1">{{ $profile_data->address }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="photo" class="form-label">Image</label>
                                    <input type="file" class="form-control"  placeholder="photo"
                                    name="photo" id="image">
                                </div>

                                <div class="mb-3">
                                    <label for="photo" class="form-label"></label>
                                    <img id="showImage" class="wd-70 rounded-circle"
                                    src="{{ (!empty($profile_data->photo)) ? url('uploads/admin_images/'.$profile_data->photo) : url('uploads/no_image.jpg') }}" alt="profile">

                                </div>

                                <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            {{-- <div class="d-none d-xl-block col-xl-3">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-body">
                            <h6 class="card-title">latest photos</h6>
                            <div class="row ms-0 me-0">
                                <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                    <figure class="mb-2">
                                        <img class="img-fluid rounded"
                                            src="https://via.placeholder.com/96x96" alt="">
                                    </figure>
                                </a>
                                <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                    <figure class="mb-2">
                                        <img class="img-fluid rounded"
                                            src="https://via.placeholder.com/96x96" alt="">
                                    </figure>
                                </a>
                                <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                    <figure class="mb-2">
                                        <img class="img-fluid rounded"
                                            src="https://via.placeholder.com/96x96" alt="">
                                    </figure>
                                </a>
                                <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                    <figure class="mb-2">
                                        <img class="img-fluid rounded"
                                            src="https://via.placeholder.com/96x96" alt="">
                                    </figure>
                                </a>
                                <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                    <figure class="mb-2">
                                        <img class="img-fluid rounded"
                                            src="https://via.placeholder.com/96x96" alt="">
                                    </figure>
                                </a>
                                <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                    <figure class="mb-2">
                                        <img class="img-fluid rounded"
                                            src="https://via.placeholder.com/96x96" alt="">
                                    </figure>
                                </a>
                                <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                    <figure class="mb-0">
                                        <img class="img-fluid rounded"
                                            src="https://via.placeholder.com/96x96" alt="">
                                    </figure>
                                </a>
                                <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                    <figure class="mb-0">
                                        <img class="img-fluid rounded"
                                            src="https://via.placeholder.com/96x96" alt="">
                                    </figure>
                                </a>
                                <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                                    <figure class="mb-0">
                                        <img class="img-fluid rounded"
                                            src="https://via.placeholder.com/96x96" alt="">
                                    </figure>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-body">
                            <h6 class="card-title">suggestions for you</h6>
                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle"
                                        src="https://via.placeholder.com/37x37" alt="">
                                    <div class="ms-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon border-0"><i
                                        data-feather="user-plus"></i></button>
                            </div>
                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle"
                                        src="https://via.placeholder.com/37x37" alt="">
                                    <div class="ms-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon border-0"><i
                                        data-feather="user-plus"></i></button>
                            </div>
                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle"
                                        src="https://via.placeholder.com/37x37" alt="">
                                    <div class="ms-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon border-0"><i
                                        data-feather="user-plus"></i></button>
                            </div>
                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle"
                                        src="https://via.placeholder.com/37x37" alt="">
                                    <div class="ms-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon border-0"><i
                                        data-feather="user-plus"></i></button>
                            </div>
                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle"
                                        src="https://via.placeholder.com/37x37" alt="">
                                    <div class="ms-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon border-0"><i
                                        data-feather="user-plus"></i></button>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle"
                                        src="https://via.placeholder.com/37x37" alt="">
                                    <div class="ms-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon border-0"><i
                                        data-feather="user-plus"></i></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
            <!-- right wrapper end -->
        </div>

    </div>


@endsection

@push('script')
<script>
    $(document).ready(function(){

        $('#image').change(function(e){
            var reader = new FileReader();
            console.log(reader);
            reader.onload = function(e){
                $('#showImage').attr('src' ,e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })
</script>
@endpush
