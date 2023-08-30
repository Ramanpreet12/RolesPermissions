@extends('backend.admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('admin.amenities.create') }}"><button type="button" class="btn btn-primary">Add
                        Amenity</button></a>
                {{-- <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li> --}}
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Amenities</h6>
                        {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>S.No. </th>
                                        <th>Amenity Name </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_amenities as $key => $amenity)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $amenity->amenity_name }}</td>
                                            <td>
                                                <div class="flex">
                                                    <a href="{{ route('admin.amenities.edit', $amenity->id) }}">
                                                        <button type="button" class="btn btn-info">
                                                            <i class="btn-icon-prepend" data-feather="check-square"
                                                                width="15px" height="15px"></i>
                                                            Edit</button></a>
                                                    {{-- <form action="{{ route('admin.all-types.destroy', $all_type->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <button type="submit" class="btn btn-danger" >
                                                            <i class="btn-icon-prepend" data-feather="trash" width="15px"
                                                                height="15px"></i> Delete</button> --}}

                                                                <a href="{{ route('admin.amenities.delete', $amenity->id) }}" id="delete">
                                                                    <button type="button" class="btn btn-danger">
                                                                        <i class="btn-icon-prepend" data-feather="trash" width="15px"
                                                                height="15px"></i>
                                                                        Delete</button></a>


                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
