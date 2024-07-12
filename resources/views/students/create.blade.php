@extends('layout.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Student') }}</div>

                    <div class="card-body">
                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="section_id">{{ __('Section') }}</label>
                                <select name="section_id" id="section_id" class="form-control @error('section_id') is-invalid @enderror" required>
                                    <option value="">{{ __('Select Section') }}</option>
                                    <option value="1">BSIT 301</option>
                                    <option value="2">Other Section</option>
                                    <!-- Add more sections as needed -->
                                </select>
                                @error('section_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="course_id">{{ __('Course') }}</label>
                                <select name="course_id" id="course_id" class="form-control @error('course_id') is-invalid @enderror" required>
                                    <option value="">{{ __('Select Course') }}</option>
                                    <option value="1">BSIT</option>
                                    <option value="2">HM</option>
                                    <option value="3">Engineering</option>
                                    <!-- Add more courses as needed -->
                                </select>
                                @error('course_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Create Student') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .card {
            padding: 20px;
            margin-top: 80px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
@endsection
