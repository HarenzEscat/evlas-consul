<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Appointment</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic styling for the top bar */
        .top-bar {
            background-color: #333;
            color: white;
            padding: 10px 0;
        }

        .top-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar h1 {
            margin: 0;
        }

        .top-bar nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .top-bar nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        .top-bar nav ul li a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .top-bar nav ul li a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <header class="header">
            <div class="container">
                <h1>Student Consultation</h1>
                <nav>
                    <ul>
                        <li><a href="#">Dashboard</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('students.index') }}">Student List</a></li>
                        <li><a href="consultant.form">Appointment</a></li>
                        <li><a href="/approve-disapprove">Approve - Disapprove</a></li>
                        <li><a href="/calendar">Calendar</a></li>
                        <li><a href="consultant.documentation.index">Documentation</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
    
    <main class="container">
        @yield('content') <!-- Placeholder for dynamic content -->
    </main>
</body>
</html>
