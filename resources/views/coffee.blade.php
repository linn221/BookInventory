@extends("layouts.master")
@section('title')
    Testing Space
@endsection

@section('content')
    <h4>
        Coffee!
    </h4>
    @php
    @endphp
@endsection

@push('js')

let course_to_books = @json($course_to_books);
let all_books_id = @json($all_books_id);
console.log(course_to_books);
console.log(all_books_id);

@endpush