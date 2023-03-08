@extends('layouts.admin')
@section('content')
<div class="row">
            <div class="col-md-12 ">
                <div class="card">
                   <div class="card-header">
                    <h3>Add Category
                    <a href="{{url('admin/category2')}}" class="btn btn-warning btn-sm float-end">BACK</a>
                    </h3>
                   </div>
                   <div class="card-body">
                          <form  action="{{url('admin/category2/'.$category2->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 mb-3">
                                <label>Name</label>
                                    <input type="text" name="Name" value="{{$category2->Name}}" class="form-control" placeholder="Enter Name"/>
                                    @error('name')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label>Color</label>
                                    <input type="text" name="Color" value="{{$category2->Color}}" id="" class="form-control" placeholder="Enter Color"/>
                                    @error('slug')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-4 mt-4 float-start">
                                <label>Status</label>
                                    <input type="checkbox" name="status" value="{{$category2->status == '1' ? 'checked':''}}" />
                                </div>
                                <div class="col-lg-12 mb-3">
                               <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                    
                          </form>
                   </div>
                </div>
            </div>
</div>
@endsection