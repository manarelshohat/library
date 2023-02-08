@extends('layouts.default')
@section('content')
    <div class="content-wrapper" style="min-height: 1345.31px;">

        {{-- <section class="content"> --}}
        {{-- <div class="container-fluid"> --}}
        <div class="row">

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Online Form</h3>
                    </div>


                    <form action="{{ route('onlines.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Book's Name</label>
                                <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputImage">Image</label>
                                <input type="file" class="form-control" id="exampleInputImage">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputDescription">Description</label>
                                <input type="text" class="form-control" id="exampleInputDescription"
                                    placeholder="Description">
                                @error('Description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName">Author's Name</label>
                                <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                                @error('Name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Category Name</label>
                                <input type="integer" class="form-control" id="exampleInputName" placeholder="Name">
                                @error('Name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>




                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add
                                    Book</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
        {{-- </section> --}}
    @endsection
</div>
