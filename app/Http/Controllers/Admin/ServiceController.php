<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $blogs = Service::all();
        return view('admin.services.index',[
            'services' => $blogs
        ]);
    }


    public function create()
    {
        return view('admin.services.create');
    }


    public function store(Request $request)
    {
        Service::saveOrUpdate($request);
        return redirect()->back()->with('success','Blog created successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('Admin.services.edit',[
            'blog' => Service::find($id)
        ]);
    }


    public function update(Request $request, $id)
    {
        Service::updateblog($request,$id);
        return redirect('/services')->with('success','Service Updated successfully');
    }

    public  $blog;

    public function destroy($id)
    {
        $this->blog = Service::find($id);
        if (file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->back()->with('success','Service deleted successfully');
    }

}
