@extends('consultant.layouts.consultation')

@section('content')

<style>
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

.appointment-form {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn-primary {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 4px;
}

.btn-primary:hover {
    background-color: #0056b3;
}

@media (max-width: 768px) {
    .container {
        padding: 10px;
    }
}

</style>
<div class="container">
    <div class="appointment-form">
        <h2>Appointment Request Form</h2>
        <form action="/consultation" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="course">Course/Grade Level/Section:</label>
                <select id="course" name="course" class="form-control" required>
                    <option value="BSIT/1ST YEAR/101">BSIT/1ST YEAR/101</option>
                    <option value="BSIT/2ND YEAR/202">BSIT/2ND YEAR/202</option>
                    <option value="BSIT/3RD YEAR/301">BSIT/3RD YEAR/301</option>
                    <option value="BSIT/4TH YEAR/401">BSIT/4TH YEAR/401</option>
                </select>
            </div>

            <div class="form-group">
                <label for="purpose">Purpose of Consultation:</label>
                <select id="purpose" name="purpose" class="form-control" required>
                    <option value="transfer">Transfer</option>
                    <option value="return-to-class">Return to Class - Academic</option>
                    <option value="graduating">Graduating Students</option>
                    <option value="personal">Personal</option>
                </select>
            </div>

            <div class="form-group">
                <label for="department">Select Department Head/Admin:</label>
                <select id="department" name="department" class="form-control" required>
                    <option value="cs">CS Department</option>
                    <option value="engineering">Engineering</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="meeting-mode">Select Meeting Mode:</label>
                <select id="meeting-mode" name="meeting_mode" class="form-control" required onchange="toggleOnlinePreference()">
                    <option value="face-to-face">Face to Face</option>
                    <option value="online">Online</option>
                </select>
            </div>

            <div id="online-preference-group" class="form-group" style="display: none;">
                <label for="online-preference">If Online, Choose Meeting Preference:</label>
                <select id="online-preference" name="online_preference" class="form-control">
                    <option value="google-meet">Google Meet</option>
                    <option value="messenger">Messenger</option>
                </select>
            </div>

            <div class="form-group">
                <label for="schedule">Select Schedule:</label>
                <input type="datetime-local" id="schedule" name="schedule" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Confirm Appointment</button>
        </form>
    </div>
</div>

<script>
    function toggleOnlinePreference() {
        var meetingMode = document.getElementById("meeting-mode").value;
        var onlinePreferenceGroup = document.getElementById("online-preference-group");

        if (meetingMode === "online") {
            onlinePreferenceGroup.style.display = "block";
        } else {
            onlinePreferenceGroup.style.display = "none";
        }
    }
</script>
@endsection
