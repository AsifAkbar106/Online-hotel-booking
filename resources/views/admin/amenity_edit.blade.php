@extends('admin.layout.app')

@section('caption', 'Edit Amenities')
@section('right_top_button')

<a href="{{ route('admin_amenity_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i>View All</a>

@endsection

@section('main_content')
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin_amenity_update',$amenity_data->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $amenity_data->name }}">
                                                </div>
                                            
                                               
                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection