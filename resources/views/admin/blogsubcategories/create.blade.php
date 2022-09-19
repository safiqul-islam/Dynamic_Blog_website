@extends('admin.master')
@section('title')
    Add Blog Sub Category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card bg-gray-500">
                        <div class="card-header">
                            <h3>Add Blog Sub Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('blog-sub-categories.store') }}" method="post">

                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Select a Category</option>
                                            @foreach($blogCategories as $blogCategory)
                                                <option value="{{ $blogCategory->id }}">{{ $blogCategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Sub Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="sub_category_name" class="form-control">
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
                                        <input type="submit" class="btn btn-success" value="Create Blog Sub Category">
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
