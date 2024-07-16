@extends('consultant.layouts.consultation')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3d3d3d;
            color: white;
        }
        .header {
            background-color: #7c3aed;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .nav {
            display: flex;
            justify-content: space-around;
            background-color: #4c4c4c;
            padding: 10px;
        }
        .nav a {
            color: white;
            text-decoration: none;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }
        .box {
            display: flex;
            justify-content: space-around;
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
        }
        .box div {
            background-color: #565656;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .box div:hover {
            background-color: #7c3aed;
            cursor: pointer;
        }
        .upload-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        .upload-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .upload-container input[type="file"] {
            margin: 10px 0;
        }
    </style>
    
    <div class="container">
        <div class="box">
            <div>Transfer</div>
            <div>Return to Class</div>
            <div>Graduating Students</div>
        </div>
        <div class="upload-container">
            @if (session('success'))
                <div style="color: green;">{{ session('success') }}</div>
                <div>Uploaded File: {{ session('file') }}</div>
            @endif
            @if (session('error'))
                <div style="color: red;">{{ session('error') }}</div>
            @endif
            <form action="{{ route('documentation.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" required>
                <button type="submit">Add File</button>
            </form>
        </div>
    </div>
@endsection
