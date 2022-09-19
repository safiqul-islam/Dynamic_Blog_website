


@extends('front.master')

@section('title')
    Blogs page
@endsection

@section('body')

    <section class="page-title overlay" style="background-image: url({{ asset('/') }}frontend/images/background/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Blogs</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>{{ $blogs->first()->blogCategory->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- *** Blog Section Start *** -->
    <section class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 py-100">

                    <!-- Blog Post -->
                    @foreach($blogs as $blog)
                        <article class="bg-white rounded mb-40">
                            <!-- Post Thumbnail -->
                            <a href="blog-single.html">
                                <img class="img-fluid w-100 rounded-top" src="{{ asset($blog->image) }}" alt="post-thumb" style="height: 380px">
                            </a>
                            <!-- Post Content -->
                            <div>
                                <div class="d-flex align-items-center border-bottom">
                                    <!-- Published Date -->
                                    <div class="text-center border-right p-4">
                                        <h3 class="text-primary mb-0">
                                            {{ $blog->created_at->format('d') }}
                                            <span class="d-block paragraph">{{ $blog->created_at->format('M') }}</span>
                                        </h3>
                                    </div>
                                    <div class="px-4">
                                        <!-- Post Title -->
                                        <a class="h4 d-block mb-10" href="blog-single.html">{{ $blog->blog_title }}</a>
                                        <!-- Post Meta -->
                                        <ul class="list-inline">
                                            <li class="list-inline-item paragraph mr-5">By
                                                <a href="#" class="paragraph">{{ $blog->user->name }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Post Excerpts -->
                                <div class="p-4">
                                        {!! \Illuminate\Support\Str::words($blog->description,250) !!}
                                    <a href="blog-single.html" class="btn btn-sm btn-primary">Read More</a>
                                </div>
                            </div>
                        </article>
                    @endforeach


                    <!-- Pagination -->
                    {{ $blogs->links() }}

                </div>

                <div class="col-lg-4">
                    <!-- Sidebar -->
                    <div class="bg-white px-4 py-100 sidebar-box-shadow">
                        <!-- Search Widget -->
                        <div class="mb-50">
                            <h4 class="mb-3">Search Here</h4>
                            <div class="search-wrapper">
                                <input type="text" class="form-control" name="search" placeholder="Type Here...">
                            </div>
                        </div>
                        <!-- categories -->
                        <div class="mb-50">
                            <h4 class="mb-3">Categories</h4>
                            <ul class="pl-0 mb-0">
                                @foreach($blogCategories as $blogCategory)
                                <li class="border-bottom">
                                    <a href="#" class="d-block text-color py-10">{{ $blogCategory->name }}</a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <!-- Widget Recent Post -->
                        <div class="mb-50">
                            <h4 class="mb-3">Recent Blog</h4>
                            @foreach($blogs as $blog)
                            <div class="d-flex py-3 border-bottom">
                                <div class="mr-4">
                                    <a href="blog-single.html">
                                        <img class="rounded" src="{{ asset($blog->image) }}" alt="post-thumb" style="height: 50px">
                                    </a>
                                </div>
                                <div>
                                    <h6 class="mb-3">
                                        <a class="text-dark" href="">{{ $blog->blog_title }}</a>
                                    </h6>
                                    <p class="meta">{{ $blog->created_at->format('d M Y') }}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- Widget Tags -->
                        <div class="mb-50">
                            <h4 class="mb-3">Tags</h4>
                            <ul class="list-inline tag-list">
                                <li class="list-inline-item">
                                    <a href="#">Business</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Marketing</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Finance</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Consultancy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Market Analysis</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Rvenenue</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Widget Newsletter -->
                        <div class="newsletter">
                            <h4 class="mb-3">Stay Updated</h4>
                            <form action="#">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                <button type="submit" class="btn btn-primary btn-sm">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection




