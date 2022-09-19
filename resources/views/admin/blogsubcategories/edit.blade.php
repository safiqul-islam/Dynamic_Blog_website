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
                            <h3>Edit Blog Sub Category</h3>
                        </div>

                        <div class="card-body">
                            <form action=" {{ route('blog-sub-categories.update', $blogSubCategories->id ) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">

                                            @foreach($blogCategories as $blogCategory)
                                                <option value="{{ $blogCategory->id }}" {{ $blogCategory->id == $blogSubCategories->category_id ? 'selected' : '' }}>{{ $blogCategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Sub Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="sub_category_name" class="form-control" value="{{ $blogSubCategories->sub_category_name }}">
                                    </div>
                                </div>


                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">

                                        <label for=""><input type="radio" name="status" class="mx-2" value="1" {{ $blogSubCategories->status == 1 ? 'checked' : '' }} >Published</label>
                                        <label for=""><input type="radio" name="status" class="mx-2" value="0" {{ $blogSubCategories->status == 0 ? 'checked' : '' }}>Unpublished</label>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Blog Sub Category">
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
