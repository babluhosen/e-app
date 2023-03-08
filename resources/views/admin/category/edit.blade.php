@extends('layouts.admin')
@section('content')
<div class="row">
            <div class="col-md-12 ">
                <div class="card">
                   <div class="card-header">
                    <h3>Edit Category
                    <a href="{{url('admin/category')}}" class="btn btn-warning btn-sm float-end">BACK</a>
                    </h3>
                   </div>
                   <div class="card-body">
                          <form  action="{{url('admin/category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                <label>Name</label>
                                    <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Enter Name"/>
                                    @error('name')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label>Slug</label>
                                    <input type="text" name="slug"  value="{{$category->slug}}" class="form-control" placeholder="Enter slug"/>
                                    @error('slug')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-8 mb-3">
                                <label>Image File</label>
                                    <input type="file" name="image"  class="form-control" />
                                    <img src="{{asset('/uploads/category/'.$category->image)}}" with="60px" height="60px"/>
                                    @error('image')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-4 mt-4 float-start">
                                <label>Status</label>
                                    <input type="checkbox"  value="{{$category->status == '1' ? 'checked':''}}" name="status" id="" />
                                </div>
                                <div class="col-lg-12 mb-3">
                                <label>Description</label>
                                 <textarea name="description"  rows="3" class="form-control">{{$category->description}}</textarea>
                                 @error('description')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-12 mb-3 text-center">
                                  <h2>SEO Tags</h2>
                                </div>
                                <div class="col-lg-4 mb-3">
                                <label>Meta Title</label>
                                    <input type="text" name="meta_title"  value="{{$category->meta_title}}" class="form-control" placeholder=" meta title"/>
                                    @error('meta_title')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-4 mb-3">
                                <label>Meta Keyword</label>
                                    <input type="text" name="meta_keyword"  value="{{$category->meta_keyword}}" class="form-control" placeholder=" meta keyword"/>
                                    @error('meta_keyword')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-4 mb-3">
                                <label>Meta Description</label>
                                    <input type="text" name="meta_description"  value="{{$category->meta_description}}" class="form-control" placeholder="meta_description"/>
                                    @error('meta_description')<small class="text-danger">{{$message}}</small>@enderror
                                </div>
                                <div class="col-lg-12 mb-3">
                               <button type="submit" class="btn btn-success">update</button>
                                </div>
                            </div>
                    
                          </form>
                   </div>
                </div>
            </div>
</div>
@endsection