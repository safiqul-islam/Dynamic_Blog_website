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
                            <h3>Edit Article </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('services.update',$blog->id) }}" method="post" enctype="multipart/form-data">

                                @csrf
                                @method('PUT')

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Article title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="service_title" class="form-control" value="{{ $blog->service_title }}">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Blog Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="summernote" cols="5" rows="10">{{ $blog->description }}</textarea>

                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Featured Image</label>
                                    <div class="col-md-8">
                                        @if($blog->image)
                                            <img src="{{ asset($blog->image) }}" alt="" style="height: 150px">
                                        @endif
                                    </div>
                                </div>

                                <div class="row mt-3 ">
                                    <label for="" class="col-md-4">Change Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/*">
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" class="mx-2" value="1" {{ $blog->status == 1 ? 'checked' : ' ' }} >Published</label>
                                        <label for=""><input type="radio" name="status" class="mx-2" value="0" {{ $blog->status == 0 ? 'checked' : ' ' }}>Unpublished</label>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Blog">
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
