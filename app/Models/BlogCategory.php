<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class BlogCategory extends Model
{
    protected $fillable = ['name','status'];

    use HasFactory;
    private static $category;

    public static function saveBlogCategory($request)
    {
        BlogCategory::create($request->except('_token'));
    }

    public static function updateBlogCategory($request,$id)
    {
        $data = BlogCategory::find($id)->update($request->except('_token'));
//        $data->name = $request->name;
//        $data->status = $request->status;
//        $data->save();

    }
}
