
@extends('admin.master')
@section('title')
    Manage Blog Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="card-body">
                    <h3 class="text-center "> All Categories</h3>
                    <table id="datatable" class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogCategories as $blogCategory)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $blogCategory->name }}</td>
                                <td>{{ $blogCategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{ route('edit_blog_category',$blogCategory->id) }}" class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></a>
                                    <a href="{{ route('delete_blog_category',$blogCategory->id) }}" onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></a>
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
