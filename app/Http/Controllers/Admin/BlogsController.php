<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSubCategory;
use Illuminate\Http\Request;

class BlogsController extends Controller
{



    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index',[
            'blogs' => $blogs
        ]);
    }


    public function create()
    {
        return view('admin.blogs.create',[
            'blogCategories' => BlogCategory::where('status',1)->get(),
            'blogSubCategories' => BlogSubCategory::where('status',1)->get()
        ]);
    }


    public function store(Request $request)
    {
        Blog::saveOrUpdate($request);
        return redirect()->back()->with('success','Blog created successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('Admin.blogs.edit',[

            'blogCategories' => BlogCategory::where('status',1)->get(),
            'blogSubCategories' => BlogSubCategory::where('status',1)->get(),
            'blog' => Blog::find($id)

        ]);
    }


    public function update(Request $request, $id)
    {
        Blog::updateblog($request,$id);
        return redirect('/blogs')->with('success','Blog Updated successfully');
    }

    private  $blog;

    public function destroy($id)
    {
        $this->blog = Blog::find($id);
        if (file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->back()->with('success','Blog Category deleted successfully');
    }


    public function getSubCategory($id)
    {
        $subCategories = BlogSubCategory::where('category_id', $id)->get();
        return json_encode($subCategories);
    }
}
