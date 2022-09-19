<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogSubCategory;
use Illuminate\Http\Request;

class BlogSubCategoryController extends Controller
{

    public function index()
    {

        return view('admin.blogsubcategories.manageblogsubcategory',[
            'blogSubCategories' => BlogSubCategory::latest()->with('blogCategory')->get()
        ]);
    }


    public function create()
    {
        return view('admin.blogsubcategories.create',[
            'blogCategories' => BlogCategory::where('status',1)->get()
        ]);
    }


    public function store(Request $request)
    {

        BlogSubCategory::saveOrUpdate($request);
        return back()->with('success','Blog Sub Category created successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

        return view('admin.blogsubcategories.edit',[
            'blogCategories' => BlogCategory::where('status',1)->get(),
            'blogSubCategories' => BlogSubCategory::find($id)

        ]);
    }


    public function update(Request $request, $id)
    {
        BlogSubCategory::saveOrUpdate($request,$id);
        return redirect('blog-sub-categories')->with('success','Blog Sub Category Updated successfully');
    }


    public function destroy($id)
    {
        BlogSubCategory::find($id)->delete();
        return redirect()->back()->with('success','Blog Sub Category deleted successfully');
    }
}
