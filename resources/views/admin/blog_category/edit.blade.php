@extends('admin.master')
@section('title')
    Edit Blog Category
@endsection

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card bg-gray-500">
                        <div class="card-header">
                            <h3>Update Blog Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update_blog_category', $blogCategory->id) }}" method="post">

                                @csrf
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" value="{{ $blogCategory->name }}">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        @if( $blogCategory->status == 1)
                                            <label for=""><input type="radio" name="status" class="mx-2" value="1" checked>Published</label>
                                            <label for=""><input type="radio" name="status" class="mx-2" value="0">Unpublished</label>
                                        @else
                                            <label for=""><input type="radio" name="status" class="mx-2" value="1" >Published</label>
                                            <label for=""><input type="radio" name="status" class="mx-2" value="0" checked>Unpublished</label>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Blog Category">
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
