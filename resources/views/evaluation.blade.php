@extends('layout.app')

@section('title', 'Student Evaluation and Consultation')

@section('content')
<style>
    .profile-card {
        background-color: #007BFF;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .profile-card img {
        border-radius: 50%;
    }

    .profile-info {
        margin-top: 10px;
    }

    .teacher-list {
        background-color: #FF69B4;
        padding: 20px;
        border-radius: 10px;
    }

    .teacher-item {
        background-color: #8A2BE2;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .btn-evaluation {
        background-color: #20B2AA;
        color: #fff;
        border: none;
        margin: 5px;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .btn-evaluation:hover {
        background-color: #3CB371;
    }
</style>

<div class="row">
    <div class="col-md-4">
        <div class="profile-card text-center">
            <img src="path_to_student_image.jpg" alt="Student Photo" class="img-fluid">
            <div class="profile-info">
                <h3>DENN HARENZ ESCAT</h3>
                <p>dennharenz@oulook.com</p>
                <button class="btn btn-light">Send Message</button>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="profile-info">
            <div class="row">
                <div class="col-md-4">
                    <p><strong>Gender:</strong> male</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Course/Strand:</strong> BSIT</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Student Number:</strong> 21-1111</p>
                </div>
            </div>
        </div>
        <div class="teacher-list">
            <h3>List of Teachers</h3>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Teacher (drop down list)">
            </div>
            <div class="teacher-item">
                <p>name of teacher</p>
                <button class="btn-evaluation">Current Evaluation</button>
                <button class="btn-evaluation">Past Evaluation</button>
            </div>
            <div class="teacher-item">
                <p>name of teacher</p>
                <button class="btn-evaluation">Current Evaluation</button>
                <button class="btn-evaluation">Past Evaluation</button>
            </div>
            <div class="teacher-item">
                <p>name of teacher</p>
                <button class="btn-evaluation">Current Evaluation</button>
                <button class="btn-evaluation">Past Evaluation</button>
            </div>
        </div>
    </div>
</div>
@endsection
