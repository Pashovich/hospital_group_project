<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Reset some default styles */
body, h1, h2, ul {
    margin: 0;
    padding: 0;
}

/* Set a background color and text color for the body */
body {
    background-color: #f4f4f4;
    color: #333;
    font-family: Arial, sans-serif;
}

/* Style the container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Style the header */
h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

/* Style the logout link */
a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    margin-right: 10px;
}

/* Style the card */
.card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

/* Style the card header */
.card-header {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    font-weight: bold;
}

/* Style the card body */
.card-body {
    padding: 20px;
}

/* Style the list items */
.list-group-item {
    border: none;
    padding: 10px;
}

/* Style the strong elements within list items */
.list-group-item strong {
    font-weight: bold;
}

/* Style the card footer */
.card-footer {
    background-color: #f4f4f4;
    padding: 10px;
    text-align: center;
    border-top: 1px solid #ddd;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .col-md-6 {
        width: 100%;
    }
    .text-right {
        text-align: center;
        margin-top: 10px;
    }
}

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Welcome, {{$user->fname}} {{$user->lname}}</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Your Appointments
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Appointment Date:</strong> September 25, 2023<br>
                    <strong>Doctor:</strong> Dr. Smith<br>
                    <strong>Department:</strong> Cardiology<br>
                    <strong>Status:</strong> Scheduled
                </li>
                <li class="list-group-item">
                    <strong>Appointment Date:</strong> October 3, 2023<br>
                    <strong>Doctor:</strong> Dr. Johnson<br>
                    <strong>Department:</strong> Orthopedics<br>
                    <strong>Status:</strong> Pending
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>