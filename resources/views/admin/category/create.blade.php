@extends('layouts.admin')
@section('content')
<div class="row">
            <div class="col-md-12 ">
                <div class="card">
                   <div class="card-header">
                    <h3>Add Category
                    <a href="{{url('admin/category')}}" class="btn btn-warning btn-sm float-end">BACK</a>
                    </h3>
                   </div>
                   <div class="card-body">
                          <form  action="{{url('admin/category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                <label>Name</label>
                                    <input type="text" name="name" id="" class="form-control" placeholder="Enter Name"/>
                                    @error('name')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Slug</label>
                                    <input type="text" name="slug" id="" class="form-control" placeholder="Enter slug"/>
                                    @error('slug')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-8 mb-3">
                                <label>Image File</label>
                                    <input type="file" name="image"  class="form-control" />
                                    @error('image')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-4 mt-4 float-start">
                                <label>Status</label>
                                    <input type="checkbox" name="status" id="" />
                                </div>
                                <div class="col-lg-12 mb-3">
                                <label>Description</label>
                                 <textarea name="description" id="" rows="3" class="form-control"></textarea>
                                 @error('description')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-12 mb-3 text-center">
                                  <h2>SEO Tags</h2>
                                </div>
                                <div class="col-lg-4 mb-3">
                                <label>Meta Title</label>
                                    <input type="text" name="meta_title" id="" class="form-control" placeholder=" meta title"/>
                                    @error('meta_title')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-4 mb-3">
                                <label>Meta Keyword</label>
                                    <input type="text" name="meta_keyword" id="" class="form-control" placeholder=" meta keyword"/>
                                    @error('meta_keyword')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-4 mb-3">
                                <label>Meta Description</label>
                                    <input type="text" name="meta_description" id="" class="form-control" placeholder="meta_description"/>
                                    @error('meta_description')<small class="text-danger">{{$message}}</small>@enderror
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