
@extends('layouts.app')

@section('title', 'Login')
@section('content')
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
            @foreach ($appointments as $appointment)
                <li class="list-group-item">
                    <strong>Appointment Date:</strong> {{$appointment->date}}<br>
                    <strong>Doctor:</strong> {{$appointment->first_name}} {{$appointment->last_name}}<br>
                    <strong>Department:</strong> {{$appointment->speciality}}<br>
                    <strong>Status:</strong> {{$appointment->status}}
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
