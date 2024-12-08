@extends('layout.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Student Details') }}</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $student->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="section">{{ __('Section') }}</label>
                            <input type="text" id="section" name="section" class="form-control" value="{{ $student->section }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="course">{{ __('Course') }}</label>
                            <input type="text" id="course" name="course" class="form-control" value="{{ $student->course }}" disabled>
                        </div>
                        <!-- In your Blade template -->
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>

                        <a href="{{ route('students.index') }}" class="btn btn-primary">{{ __('Back to List') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
