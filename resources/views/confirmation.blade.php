@extends('layouts.app')

@section('title', 'Doctor\'s Schedule')
@section('content')
<div class="container">
    <h1>Appointment Confirmation</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    
    @endif
    <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>

</div>
@endsection
