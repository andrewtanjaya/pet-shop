@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-flex w-100">

                    <div class="mx-5 w-100">
                        <p class="card-title h2 mt-4 mb-5 font-weight-bold">
                            Add New Pet Category
                        </p>
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="name">Category Name : </label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label" for="image">Category Image : </label>
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-input @error('image') is-invalid @enderror" name="image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
