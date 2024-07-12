@extends('layout.app')

@section('content')
<div class="mt-5">
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        <div class="form-group">
            <label>Section</label>
            <input type="text" name="section" class="form-control" value="{{ $student->section }}" required>
        </div>
        <div class="form-group">
            <label>Course</label>
            <input type="text" name="course" class="form-control" value="{{ $student->course }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
</div>
@endsection
