
@extends('admin.master')
@section('title')
    Manage Blog Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="card-body">
                    <h3 class="text-center "> All Sub Categories</h3>
                    <table id="datatable" class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Sub Category Name</th>
                            <th scope="col">Category Name</th>

                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogSubCategories as $blogSubCategory)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $blogSubCategory->sub_category_name }}</td>
                                <td>{{ $blogSubCategory->blogCategory->name }}</td>
                                <td>{{ $blogSubCategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>

                                    <form action="{{ route('blog-sub-categories.destroy',$blogSubCategory->id) }}" method="post" class="">
                                        <a href="{{ route('blog-sub-categories.edit',$blogSubCategory->id) }}" class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></a>
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>


                </div>


            </div>
        </div>

    </section>



@endsection
