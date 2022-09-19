<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    private static $blog, $blogImage, $imageName, $imageDirectory, $imageUrl;

    public static function saveImage($request,$existImage= null)
    {
        self::$blogImage = $request->file('image');
        if (self::$blogImage)
        {
            if (file_exists($existImage))
            {
                unlink($existImage);
            }

            self::$imageName = 'article_img'.time().'.'.self::$blogImage->getClientOriginalExtension();
            self::$imageDirectory = 'admin/assets/images/upload-images/blogs/';
            self::$blogImage->move(self::$imageDirectory,self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;

        }else
        {
            self::$imageUrl = $existImage;
        }
        return self::$imageUrl;
    }


    public static function saveOrUpdate($request)
    {
        self::$blog                         = new Article();
        self::$blog->article_title          = $request->article_title;
        self::$blog->description            = $request->description;
        self::$blog->image                  = self::saveImage($request);
        self::$blog->user_id                = auth()->id();
        self::$blog->slug                   = str_replace('','-',$request->article_title);
        self::$blog->status                 = $request->status;
        self::$blog->save();
    }

    public static function updateblog($request,$id)
    {
        self::$blog                         = Article::find($id);
        self::$blog->article_title          = $request->article_title;
        self::$blog->description            = $request->description;
        self::$blog->image                  = self::saveImage($request,self::$blog->image);
        self::$blog->user_id                = auth()->id();
        self::$blog->slug                   = str_replace('','-',$request->article_title);
        self::$blog->status                 = $request->status;
        self::$blog->save();
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
