@extends('layouts.master')

@section('title')
    Create Book
@endsection

@section('content')
    <h4>
        Create New Book
    </h4>

    <form action="{{ route('book.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="" class=" form-label">
                Name
            </label>
            <input type="text" name="name" value="" class=" form-control">
        </div>
        <div class="mb-3">
            <label for="" class=" form-label">
                Price
            </label>
            <input type="number" name="price" value="0" step="50" class=" form-control">
        </div>
        <div class="mb-3">
            <label for="" class=" form-label">
                Course
            </label>
            {{-- yellow, turn me into datalist --}}
            <input type="text" name="course" value="" class=" form-control">
        </div>
        <div class="mb-3">
            <label for="" class=" form-label">
                Stock
            </label>
            <input type="number" name="stock" value="0" class=" form-control">
        </div>
        <div class="mb-3">
            <label for="" class=" form-label">
                Minimum Stock
            </label>
            <input type="number" name="minStock" value="0" class=" form-control">
        </div>
        <div class=" d-flex justify-content-end">
            <button class=" btn btn-primary">
                Store
            </button>
        </div>
    </form>
@endsection
