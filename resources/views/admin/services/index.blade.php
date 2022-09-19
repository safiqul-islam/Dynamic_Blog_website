
@extends('admin.master')
@section('title')
    Manage Blog Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="card-body">
                    <h3 class="text-center "> All Services</h3>
                    <table id="datatable" class="table table-responsive">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Service Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $blog)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $blog->service_title }}</td>
                                <td>{!! \Illuminate\Support\Str::words($blog->description, 100,'...') !!} </td>

                                <td><img src="{{ asset($blog->image) }}" alt="" style="height: 100px"> </td>

                                <td>{{ $blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>

                                    <form action="{{ route('services.destroy',$blog->id) }}" method="post" class="">
                                        <a href="{{ route('services.edit',$blog->id) }}" class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></a>
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
