@extends('admin.master')
@section('title')
    Add New Article
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card bg-gray-500">
                        <div class="card-header text-center">
                            <h3>Add New Article </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">

                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Article title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="article_title" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Article Description</label>
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

                                <div class="row mt-4 ">
                                    <div class="col-md-8 justify-content-center">
                                        <input type="submit" class="btn btn-success " value="Create New Service">
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
