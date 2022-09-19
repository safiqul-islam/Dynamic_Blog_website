<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home.home',[
            "articles" => Article::where('status',1)->latest()->take(3)->get(),
            "services" => Service::where('status',1)->latest()->take(3)->get(),

        ]);
    }

    public function contact()
    {
        return view('front.contact.contact');
    }

    public function articleDetails($slug)
    {

        return view('front.articles.details',[
            'article'=> Article::where('slug',$slug)->first(),
            'recent_articles'=> Article::where('status',1)->latest()->take(3)->get(),

        ]);
    }



    public function serviceDetails($slug)
    {

        return view('front.services.details',[
            'service'=> Service::where('slug',$slug)->first(),
            'recent_services'=> Service::where('status',1)->latest()->take(3)->get(),

        ]);
    }

    public function categoryBlogs($id)
    {

        return view('front.blogs.categoryBlogs',[
            'blogs'=> Blog::where('blog_category_id', $id)->where('status',1)->simplepaginate(2),

        ]);

    }
}
