@extends('backend.admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('admin.permission.export') }}"><button type="button" class="btn btn-success">Download
                </button></a>
            </div>
            <div>
                <a href="{{ route('admin.permissions.index') }}"><button type="button" class="btn btn-primary">Back
                </button></a>
            </div>
        </div>
            </div></div>

        <div class="row profile-body">
            <div class="col-md-8 col-xl-12 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Import Permissions</h6>
                            <form id="permission_form" class="forms-sample" method="POST" action="{{ route('admin.permission.import') }}"
                            enctype="multipart/form-data">
                            @csrf
                                <div class="form-group mb-3">
                                    <label for="import_file" class="form-label">Xlsx File Format</label>
                                    <input type="file" class="form-control" id="import_file" autocomplete="off"
                                       name="import_file">
                                       @error('import_file')<span class="text-danger">{{ ($message) }}</span> @enderror
                                </div>
                                <button type="submit" class="btn btn-primary me-2 mt-2">Upload</button>
                                <button class="btn btn-secondary mt-2">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

