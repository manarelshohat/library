@extends('layouts.default')
@section('content')
    <div class="content-wrapper" style="min-height: 1345.31px;">

        <div class="row">

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Borrows Form</h3>
                    </div>


                    <form action="{{ route('borrows.store') }}" method="post">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputregister_name">Registers Name</label>
                                <input type="text" name="register_name" value="{{ old('register_name') }}"
                                    class="form-control" id="exampleInputregister_name" placeholder="Enter register_name">
                                @error('register_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>


                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputbook_name">Book Name</label>
                                <input type="text" name="book_name" value="{{ old('book_name') }}" class="form-control"
                                    id="exampleInputbook_name" placeholder="Enter book_name">
                                @error('book_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>


                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputcategory">Category Name</label>
                                <input type="text" name="category_name" value="{{ old('category_name') }}"
                                    class="form-control" id="exampleInputcategory_name" placeholder="Enter category_name">
                                @error('category_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>


                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputissue_date">Issue Date</label>
                                <input type="date" name="issue_date" value="{{ old('issue_date') }}" class="form-control"
                                    id="exampleInputissue_date" placeholder="Enter issue_date">
                                @error('issue_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>


                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputreturn_date">Return Date</label>
                                <input type="date" name="return_date" value="{{ old('return_date') }}"
                                    class="form-control" id="exampleInputreturn_date" placeholder="Enter return_date">
                                @error('return_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add
                                    Borrow</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
