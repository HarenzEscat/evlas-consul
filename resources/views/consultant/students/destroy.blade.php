@extends('layout.app')

@section('content')

<div class="container mt-5">
    <h2>Delete Student</h2>
    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this student?</p>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('students.index') }}" class="btn btn-secondary ml-2">Cancel</a>
</div>

@endsection
