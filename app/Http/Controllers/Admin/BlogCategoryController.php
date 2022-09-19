<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogSubCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    private $blogCategories;

    public function add_category()
    {
        return view('admin.blog_category.create');
    }


    public function new_category(Request $request)
    {
        BlogCategory::saveBlogCategory($request);
        return redirect()->back()->with('success','Blog Category created successfully');
    }


    public function manage_category()
    {
        $this->blogCategories = BlogCategory::latest()->get();
        return view('admin.blog_category.manage',[
            'blogCategories'=> $this->blogCategories
        ]);
    }


    public function edit_category($id)
    {
        $data = BlogCategory::find($id);
        return view('admin.blog_category.edit',[
            'blogCategory'=> $data
        ]);
    }


    public function update_category(Request $request,$id)
    {
        BlogCategory::updateBlogCategory($request,$id);
        return redirect('/manage_blog_category')->with('success','Blog Category Updated successfully');
    }


    public function delete_category($id)
    {
        BlogCategory::find($id)->delete();
        return redirect()->back()->with('success','Blog Category deleted successfully');
    }

}
