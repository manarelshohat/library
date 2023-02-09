@extends('layouts.default')

@section('content')
    <div class="content-wrapper" style="min-height: 1302.12px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 justify-content-around">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-2 ">
                        <a href="{{ route('books.create') }}" class="btn btn-block btn-outline-success btn-lg">Add
                            Book </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Books Table</h3>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Author Name</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Edit</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                            <tr>
                                                <td>{{ $book->id }}</td>
                                                <td>{{ $book->name }}</td>
                                                <td>{{ $book->code }}</td>
                                                <td>{{ $book->image }}</td>
                                                <td>{{ $book->author_name }}</td>
                                                <td>{{ $book->category_name }}</td>
                                                <td>{{ $book->description }}</td>
                                                <td>{{ $book->price }}</td>
                                                <td>{{ $book->rate }}</td>
                                                <td>{{ $book->status }}</td>
                                                <td>
                                                    <form action="{{ route('books.delete', $book->id) }}"method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit"
                                                            class="btn btn-block btn-outline-danger btn-lg">Delete</button>
                                                    </form>
                                                </td>
                                                <td><a href="{{ route('books.edit', $book->id) }}"
                                                        class="btn btn-block btn-outline-info btn-lg">Edit</td>
                                            </tr>
                                        @endforeach
                                    <tbody>
                                </table>

                            </div>
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    {{ $books->links() }}

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endsection
