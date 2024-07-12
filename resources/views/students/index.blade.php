@extends('layout.app')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            height: 100vh;
            margin: 0;
            flex-direction: column;

        }
        .course-button, .year-list-button {
            display: block;
            width: 200px;
            padding: 10px;
            margin: 10px auto;
            background-color: #2ecc71;
            color: white;
            text-align: center;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        .year-list {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
        .container {
            display: none;
            grid-template-columns: repeat(4, auto);
            gap: 20px;
            padding: 20px;
            background-color: #004c7f;
            color: white;
            border: 1px solid white;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .year {
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            border: 1px solid white;
        }
        .course-button {
            background-color: #00d1a1;
         
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        .course-button:hover {
            background-color: #00a885;
        }
        .course-title {
            font-family: Lucida Handwriting;
            display: none;
            color: #004c7f;
            margin-bottom: 20px;
            font-size: 60px;
        }
    </style>
</head>
<body>
    <div id="courseSelection">
        <button class="course-button" id="bsitButton">BSIT</button>
        <button class="course-button" id="csButton">BSCS</button>
        <button class="course-button" id="actButton">ACT</button>
        <button class="course-button" id="bscpeButton">BSCPE</button>
        <button class="course-button" id="bshmButton">BSHM</button>
        <button class="course-button" id="hrsButton">HRS</button>
        <button class="course-button" id="hrtButton">HRT</button>
        <button class="course-button" id="tourismButton">TOURISM</button>
        <button class="course-button" id="cetButton">CET</button>
    </div>

    <h2 id="bsitTitle" class="course-title"><center>BSIT YEAR LIST</center></h2>
    <div id="bsitYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">BSIT-101</button>
        <button class="course-button">BSIT-201</button>
        <button class="course-button">BSIT-301</button>
        <button class="course-button">BSIT-401</button>

        <button class="course-button">BSIT-102</button>
        <button class="course-button">BSIT-202</button>
        <button class="course-button">BSIT-302</button>
        <button class="course-button">BSIT-402</button>

        <button class="course-button">BSIT-103</button>
        <button class="course-button">BSIT-203</button>
        <button class="course-button">BSIT-303</button>
        <button class="course-button">BSIT-403</button>
    </div>

    <h2 id="csTitle" class="course-title"><center>BSCS YEAR LIST</center></h2>
    <div id="csYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">BSCS-101</button>
        <button class="course-button">BSCS-201</button>
        <button class="course-button">BSCS-301</button>
        <button class="course-button">BSCS-401</button>

        <button class="course-button">BSCS-102</button>
        <button class="course-button">BSCS-202</button>
        <button class="course-button">BSCS-302</button>
        <button class="course-button">BSCS-402</button>

        <button class="course-button">BSCS-103</button>
        <button class="course-button">BSCS-203</button>
        <button class="course-button">BSCS-303</button>
        <button class="course-button">BSCS-403</button>
    </div>

    <h2 id="actTitle" class="course-title"><center>ACT YEAR LIST</center></h2>
    <div id="actYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">ACT-101</button>
        <button class="course-button">ACT-201</button>
        <button class="course-button">ACT-301</button>
        <button class="course-button">ACT-401</button>

        <button class="course-button">ACT-102</button>
        <button class="course-button">ACT-202</button>
        <button class="course-button">ACT-302</button>
        <button class="course-button">ACT-402</button>

        <button class="course-button">ACT-103</button>
        <button class="course-button">ACT-203</button>
        <button class="course-button">ACT-303</button>
        <button class="course-button">ACT-403</button>
    </div>

    <h2 id="bscpeTitle" class="course-title"><center>BSCPE YEAR LIST</center></h2>
    <div id="bscpeYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">BSCPCE-101</button>
        <button class="course-button">BSCPCE-201</button>
        <button class="course-button">BSCPCE-301</button>
        <button class="course-button">BSCPCE-401</button>

        <button class="course-button">BSCPCE-102</button>
        <button class="course-button">BSCPCE-202</button>
        <button class="course-button">BSCPCE-302</button>
        <button class="course-button">BSCPCE-402</button>

        <button class="course-button">BSCPCE-103</button>
        <button class="course-button">BSCPCE-203</button>
        <button class="course-button">BSCPCE-303</button>
        <button class="course-button">BSCPCE-403</button>
    </div>

    <h2 id="bshmTitle" class="course-title"><center>BSHM YEAR LIST</center></h2>
    <div id="bshmYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">BSHM-101</button>
        <button class="course-button">BSHM-201</button>
        <button class="course-button">BSHM-301</button>
        <button class="course-button">BSHM-401</button>

        <button class="course-button">BSHM-102</button>
        <button class="course-button">BSHM-202</button>
        <button class="course-button">BSHM-302</button>
        <button class="course-button">BSHM-402</button>

        <button class="course-button">BSHM-103</button>
        <button class="course-button">BSHM-203</button>
        <button class="course-button">BSHM-303</button>
        <button class="course-button">BSHM-403</button>
    </div>

    <h2 id="hrsTitle" class="course-title"><center>HRS YEAR LIST</center></h2>
    <div id="hrsYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">HRS-101</button>
        <button class="course-button">HRS-201</button>
        <button class="course-button">HRS-301</button>
        <button class="course-button">HRS-401</button>

        <button class="course-button">HRS-102</button>
        <button class="course-button">HRS-202</button>
        <button class="course-button">HRS-302</button>
        <button class="course-button">HRS-402</button>

        <button class="course-button">HRS-103</button>
        <button class="course-button">HRS-203</button>
        <button class="course-button">HRS-303</button>
        <button class="course-button">HRS-403</button>
    </div>

    <h2 id="hrtTitle" class="course-title"><center>HRT YEAR LIST</center></h2>
    <div id="hrtYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">HRT-101</button>
        <button class="course-button">HRT-201</button>
        <button class="course-button">HRT-301</button>
        <button class="course-button">HRT-401</button>

        <button class="course-button">HRT-102</button>
        <button class="course-button">HRT-202</button>
        <button class="course-button">HRT-302</button>
        <button class="course-button">HRT-402</button>

        <button class="course-button">HRT-103</button>
        <button class="course-button">HRT-203</button>
        <button class="course-button">HRT-303</button>
        <button class="course-button">HRT-403</button>
    </div>

    <h2 id="tourismTitle" class="course-title"><center>TOURISM YEAR LIST</center></h2>
    <div id="tourismYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">Tourism-101</button>
        <button class="course-button">Tourism-201</button>
        <button class="course-button">Tourism-301</button>
        <button class="course-button">Tourism-401</button>

        <button class="course-button">Tourism-102</button>
        <button class="course-button">Tourism-202</button>
        <button class="course-button">Tourism-302</button>
        <button class="course-button">Tourism-402</button>

        <button class="course-button">Tourism-103</button>
        <button class="course-button">Tourism-203</button>
        <button class="course-button">Tourism-303</button>
        <button class="course-button">Tourism-403</button>
    </div>

    <h2 id="cetTitle" class="course-title"><center>CET YEAR LIST</center></h2>
    <div id="cetYearList" class="container">
        <div class="year">1ST YEAR</div>
        <div class="year">2ND YEAR</div>
        <div class="year">3RD YEAR</div>
        <div class="year">4TH YEAR</div>
        
        <button class="course-button">Cet-101</button>
        <button class="course-button">Cet-201</button>
        <button class="course-button">Cet-301</button>
        <button class="course-button">Cet-401</button>

        <button class="course-button">Cet-102</button>
        <button class="course-button">Cet202</button>
        <button class="course-button">Cet-302</button>
        <button class="course-button">Cet402</button>

        <button class="course-button">Cet-103</button>
        <button class="course-button">Cet-203</button>
        <button class="course-button">Cet-303</button>
        <button class="course-button">Cet-403</button>
    </div>

  

    <script>
        document.getElementById('bsitButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('bsitTitle').style.display = 'block';
            document.getElementById('bsitYearList').style.display = 'grid';
        });
        
        document.getElementById('csButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('csTitle').style.display = 'block';
            document.getElementById('csYearList').style.display = 'grid';
        });

        document.getElementById('actButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('actTitle').style.display = 'block';
            document.getElementById('actYearList').style.display = 'grid';
        });

        document.getElementById('bscpeButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('bscpeTitle').style.display = 'block';
            document.getElementById('bscpeYearList').style.display = 'grid';
        });
        document.getElementById('bshmButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('bshmTitle').style.display = 'block';
            document.getElementById('bshmYearList').style.display = 'grid';
        });
        document.getElementById('hrsButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('hrsTitle').style.display = 'block';
            document.getElementById('hrsYearList').style.display = 'grid';
        });
        document.getElementById('hrtButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('hrtTitle').style.display = 'block';
            document.getElementById('hrtYearList').style.display = 'grid';
        });

        document.getElementById('tourismButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('tourismTitle').style.display = 'block';
            document.getElementById('tourismYearList').style.display = 'grid';
        });

        document.getElementById('cetButton').addEventListener('click', function() {
            document.getElementById('courseSelection').style.display = 'none';
            document.getElementById('cetTitle').style.display = 'block';
            document.getElementById('cetYearList').style.display = 'grid';
        });
    </script>


@endsection