@extends('layouts.default')
@section('content')
    <div class="content-wrapper" style="min-height: 1345.31px;">

        {{-- <section class="content"> --}}
        {{-- <div class="container-fluid"> --}}
        <div class="row">

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Categories Form</h3>
                    </div>


                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputNum">Books' Number</label>
                                <input type="integer" class="form-control" id="exampleInputNum" placeholder="Brief">
                                @error('num')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>




                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add
                                    Category</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
        {{-- </section> --}}
    @endsection
</div>
