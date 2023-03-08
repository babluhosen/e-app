<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\Category2FormRequest;
use App\Http\Controllers\Controller;
use App\Models\Category2;
use Illuminate\Http\Request;

class Category2Controller extends Controller
{
    public function index2()
    {
        return view('admin.category2.index2');
    }
    public function create2()
    {
        return view('admin.category2.create2');
    }
    public function store(Category2FormRequest $request)
    {
     $validatedData=$request->validated();
     $category=new Category2;
     $category->Name=$validatedData['Name'];
     $category->Color=$validatedData['Color'];
     $category->status=$request->status==true?'1':'0';
     $category->save();
     return redirect('admin/category2')->with('message','Category added succssfully');

    }
    public function edit(Category2 $category2)
    {
      return view('admin.category2.edit', compact('category2'));
    }
}
