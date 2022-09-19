<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    private static $service, $blogImage, $imageName, $imageDirectory, $imageUrl;

    public static function saveImage($request,$existImage= null)
    {
        self::$blogImage = $request->file('image');
        if (self::$blogImage)
        {
            if (file_exists($existImage))
            {
                unlink($existImage);
            }

            self::$imageName = 'service_img'.time().'.'.self::$blogImage->getClientOriginalExtension();
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
        self::$service                         = new Service();
        self::$service->service_title          = $request->service_title;
        self::$service->description            = $request->description;
        self::$service->image                  = self::saveImage($request);
        self::$service->slug                   = str_replace('','-',$request->service_title);
        self::$service->status                 = $request->status;
        self::$service->save();
    }

    public static function updateblog($request,$id)
    {
        self::$service                         = Service::find($id);
        self::$service->service_title             = $request->service_title;
        self::$service->description            = $request->description;
        self::$service->image                  = self::saveImage($request,self::$service->image);
        self::$service->slug                   = str_replace('','-',$request->service_title);
        self::$service->status                 = $request->status;
        self::$service->save();
    }
}
