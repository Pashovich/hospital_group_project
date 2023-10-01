@extends('layouts.app')

@section('title', 'Doctor\'s Schedule')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<form method="GET" action="{{ route('schedule', ['speciality' => request('speciality'), 'time' => request('time'), 'week' => request('week')]) }}">
    <div class="form-group">
        <label for="speciality">Speciality:</label>
        <select name="speciality" id="speciality" class="form-control">
            <option value="">All Specialities</option>
            @foreach ($specialities as $speciality)
                <option value="{{ $speciality }}" {{ request('speciality') == $speciality ? 'selected' : '' }}>
                    {{ $speciality }}
                </option>
            @endforeach
        </select>
    </div>


    <div class="form-group">
        <label for="week">Select Week:</label>
        <input type="week" name="week" id="week" class="form-control" value="{{ request('week') }}" required>
    </div>
    @if ($errors->has('week'))
        <div class="alert alert-danger">
            {{ $errors->first('week') }}
        </div>
    @endif
    <button type="submit" class="btn btn-primary">Apply Filters</button>
</form>
<table class="table">
        <thead>
            <tr>
                <th>Doctor</th>
                <th>Time</th>
                <th>Day of the Week</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->doctor->first_name }} {{ $schedule->doctor->last_name }}</td>
                    <td>{{ $schedule->time }}</td>
                    <td>{{ $schedule->day_of_the_week }}</td>
                    <td>
                        <form method="POST" action="{{ route('schedule.store') }}">
                            @csrf
                            <input type="hidden" name="doctor_id" value="{{ $schedule->doctor_id }}">
                            <input type="hidden" name="schedule_id" value="{{ $schedule->id }}">
                            <input type="hidden" name="day_of_the_week" value="{{ $schedule->day_of_the_week }}">
                            <input type="hidden" name="week" value="{{ request('week') }}">
                            <button type="submit" class="btn btn-success">Make Appointment</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
