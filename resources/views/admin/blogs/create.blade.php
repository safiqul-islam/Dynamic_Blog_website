@extends('admin.master')
@section('title')
    Add Blog Sub Category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card bg-gray-500">
                        <div class="card-header text-center">
                            <h3>Add New Blog </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">

                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="blog_category_id" id="categoryName" class="form-control">
                                            <option >Select a Category</option>
                                            @foreach($blogCategories as $blogCategory)
                                                <option value="{{ $blogCategory->id }}">{{ $blogCategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Sub Category Name</label>
                                    <div class="col-md-8">
                                        <select name="blog_sub_category_id" id="subCategoryName" class="form-control">
                                            <option value="">Select a Category</option>
                                            @foreach($blogSubCategories as $blogSubCategory)
                                                <option value="{{ $blogSubCategory->id }}">{{ $blogSubCategory->sub_category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Blog title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="blog_title" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Blog Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="summernote" cols="30" rows="10"></textarea>

                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Featured Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/*">
                                    </div>
                                </div>


                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" class="mx-2" value="1" checked>Published</label>
                                        <label for=""><input type="radio" name="status" class="mx-2" value="0">Unpublished</label>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Create New Blog">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
