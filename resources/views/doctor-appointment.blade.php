@extends('layouts.app')

@section('title', 'Doctor\'s Schedule')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        h1 {
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* Align form elements to the left */
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            margin-right: 10px;
            /* Add margin to separate labels from form elements */
        }

        select,
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        #hour-selection {
            margin-top: 10px;
        }

        #book-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
        }

        #book-button:hover {
            background-color: #0056b3;
        }

        #hour-selection {
            margin-top: 10px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .radio-button {
            display: flex;
            align-items: center;
            background-color: #f5f5f5;
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .radio-button:hover {
            background-color: #007bff;
            color: #fff;
        }

        input[type="radio"] {
            display: none;
            /* Hide the actual radio button */
        }

        /* Style for selected radio button label */
        input[type="radio"]:checked {
            background-color: #0056b3;
            color: #fff;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Adjust column widths as needed */
        th:nth-child(1),
        td:nth-child(1) {
            width: 20%;
        }

        th:nth-child(2),
        td:nth-child(2) {
            width: 20%;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 30%;
        }

        th:nth-child(4),
        td:nth-child(4) {
            width: 15%;
        }
    </style>



    <div class="container">
        <h1>Doctor Availability</h1>
        <form action="/make-appointment" method="post">
            @csrf

            <!-- Department Selection -->
            <label for="department">Select Department:</label>
            <select id="department" name="department" required>
                <option value="" disabled selected>Select Department</option>
                @foreach ($specialities as $speciality)
                    <option value="{{ $speciality }}">
                        {{ $speciality }}
                    </option>
                @endforeach
            </select>

            <!-- Doctor Selection -->
            <label for="doctor">Select Doctor:</label>
            <select id="doctor" name="doctor_id" required>
                <option value="" disabled selected>Select Doctor</option>
                @foreach ($doctors as $doc)
                    <option value="{{ $doc->id }}">
                        {{ $doc->first_name }} {{ $doc->last_name }}
                    </option>
                @endforeach
            </select>

            <!-- Date Selection -->
            <label for="date">Select Date:</label>
            <input type="date" id="date" name="date" required>

            <!-- Hour Selection -->
            <label>Select Hour:</label>
            <div id="hour-selection">
                <!-- Dynamic hour options will be added here using JavaScript -->
            </div>

            <!-- Booking Button -->
            <button id="book-button" type="submit">Book Appointment</button>
        </form>

        <!-- Display Booking Confirmation -->
        <h2>Booking Confirmation:</h2>
        <div id="confirmation">
            <table>
                <thead>
                    <tr>

                        <th>Date</th>
                        <th> Time</th>
                        <th>Doctor Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($myAppointments as $item)
                        <tr>

                            <td>{{ $item->date }}</td>
                            <td>{{ $item->appointment_time }}</td>
                            <td>{{ $item->doc_name }}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <script>
        // Define the start and end times
        var startTime = 15;
        var endTime = 22;

        // Get the hour-selection container element
        var hourSelection = document.getElementById("hour-selection");

        // Loop through the hours and create radio buttons dynamically
        for (var i = startTime; i <= endTime; i++) {
            var label = document.createElement("label");
            label.setAttribute("for", "hour-" + i);
            label.setAttribute("class", "radio-button");
            label.textContent = i + ":00 - " + (i + 1) + ":00";

            var input = document.createElement("input");
            input.setAttribute("type", "radio");
            input.setAttribute("name", "appointment_time");
            input.setAttribute("value", label.textContent);
            input.setAttribute("id", "hour-" + i);

            hourSelection.appendChild(label);
            hourSelection.appendChild(input);
        }
    </script>
@endsection
