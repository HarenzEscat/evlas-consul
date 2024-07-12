<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve - Disapprove</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .approve-disapprove-form {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .approve-disapprove-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        .approve-disapprove-form form {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .approve-disapprove-form form input[type="text"],
        .approve-disapprove-form form button {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }
        .approve-disapprove-form form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .approve-disapprove-form form button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .circle {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: #007bff;
            cursor: pointer;
        }
        .circle.hidden {
            display: none;
        }
        .circle.selected {
            background-color: #dc3545;
        }
        .actions {
            margin-top: 20px;
            text-align: center; /* Center align the buttons */
        }
        .actions button {
            padding: 10px 20px;
            font-size: 16px;
            margin-left: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .actions button:first-child {
            background-color: #dc3545;
            color: #fff;
        }
        .actions button:nth-child(2) {
            background-color: #007bff;
            color: #fff;
        }
        .actions button:last-child {
            background-color: #28a745;
            color: #fff;
        }
        .back-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #6c757d;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }
        .modal h2 {
            margin-bottom: 10px;
            font-size: 24px;
        }
        .modal p {
            margin-bottom: 20px;
            font-size: 16px;
        }
        .modal .actions button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 0 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .modal .actions button:first-child {
            background-color: #dc3545;
            color: #fff;
        }
        .modal .actions button:last-child {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="approve-disapprove-form">
        <h2>Approve - Disapprove Appointments</h2>
        
        <form action="{{ url('/approve-disapprove') }}" method="GET">
            <input type="text" id="searchInput" name="search" value="{{ old('search', $search) }}" placeholder="Search">
            <button type="submit">Search</button>
            <button type="button" id="selectButton">Select</button>
        </form>
        <form id="deleteForm" action="{{ url('/approve-disapprove/delete') }}" method="POST">
            @csrf
            <input type="hidden" id="idsToDelete" name="idsToDelete">
        </form>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Course/Grade Level/Section</th>
                    <th>Purpose</th>
                    <th>Date / Time</th>
                    @if($appointments->where('meeting_mode', 'online')->count() > 0)
                        <th>Meeting Preference</th>
                    @endif
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                <tr data-id="{{ $appointment->id }}">
                    <td>
                        <div class="circle hidden" onclick="toggleCircleFill(event)"></div>
                    </td>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->course }}</td>
                    <td>{{ $appointment->purpose }}</td>
                    <td>{{ \Carbon\Carbon::parse($appointment->schedule)->format('Y-m-d H:i') }}</td>
                    @if($appointment->meeting_mode === 'online')
                        <td>{{ $appointment->online_preference }}</td>
                    @endif
                    <td>
                        <form action="/approve-disapprove/approve/{{ $appointment->id }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit">Approve</button>
                        </form>
                        <form action="/approve-disapprove/disapprove/{{ $appointment->id }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit">Disapprove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="actions">
        <button type="button" id="deleteButton">Delete</button>
        <button type="button">Save PDF</button>
        <button class="back-button" onclick="goBack()">Back</button>
    </div>
    <!-- Confirmation Modal -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <h2>Confirm Deletion</h2>
            <p>Are you sure you want to delete the selected appointments?</p>
            <div class="actions">
                <button id="confirmDeleteButton" onclick="confirmDelete()">Yes</button>
                <button id="cancelDeleteButton" onclick="hideModal()">No</button>
            </div>
        </div>
    </div>
    <script>
        function toggleSelectionMode() {
            var circles = document.querySelectorAll('.circle');
            circles.forEach(function(circle) {
                circle.classList.toggle('hidden');
            });
        }

        function toggleCircleFill(event) {
            event.target.classList.toggle('selected');
        }

        function deleteSelectedRows() {
            var selectedCircles = document.querySelectorAll('.circle.selected');
            var idsToDelete = [];
            selectedCircles.forEach(function(circle) {
                var row = circle.closest('tr');
                idsToDelete.push(row.dataset.id);
            });

            if (idsToDelete.length > 0) {
                var form = document.getElementById('deleteForm');
                var input = document.getElementById('idsToDelete');
                input.value = idsToDelete.join(',');
                showModal();
            }
        }

        function checkSearchInput() {
            var searchInput = document.getElementById('searchInput');
            if (searchInput.value === '') {
                window.location.href = '{{ url("/approve-disapprove") }}';
            }
        }

        function goBack() {
            window.history.back();
        }

        function showModal() {
            document.getElementById('confirmationModal').style.display = 'block';
        }

        function hideModal() {
            document.getElementById('confirmationModal').style.display = 'none';
        }

        function confirmDelete() {
            var form = document.getElementById('deleteForm');
            form.submit();
        }

        document.addEventListener('DOMContentLoaded', function() {
            var selectButton = document.getElementById('selectButton');
            selectButton.addEventListener('click', toggleSelectionMode);

            var circles = document.querySelectorAll('.circle');
            circles.forEach(function(circle) {
                circle.addEventListener('click', toggleCircleFill);
            });

            var deleteButton = document.getElementById('deleteButton');
            deleteButton.addEventListener('click', deleteSelectedRows);

            var searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', checkSearchInput);

            document.getElementById('confirmDeleteButton').addEventListener('click', confirmDelete);
            document.getElementById('cancelDeleteButton').addEventListener('click', hideModal);
        });
    </script>
</body>
</html>
