<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlController extends Controller
{

    public function index()
    {
        $blogs = Article::all();
        return view('admin.articles.index',[
            'articles' => $blogs
        ]);
    }


    public function create()
    {
        return view('admin.articles.create');
    }


    public function store(Request $request)
    {
        Article::saveOrUpdate($request);
        return redirect()->back()->with('success','Article created successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('Admin.articles.edit',[
            'blog' => Article::find($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        Article::updateblog($request,$id);
        return redirect('/articles')->with('success','Articles Updated successfully');
    }

    public  $blog;

    public function destroy($id)
    {
        $this->blog = Article::find($id);
        if (file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->back()->with('success','Articles deleted successfully');
    }
}
