
@extends('layouts.dashboard')

@section('title', 'Home Page')

@section('content')

    <form action="{{route('save_prescription', ['appointment_id' => $appointment_id])}}" method="POST">
    @csrf
    <div class="flex flex-col justify-start items-center min-h-screen">
    <label for="message" class=" mt-2 text-left block mb-2 text-sm font-medium text-gray-900 dark:text-black">Symptoms</label>
    <textarea name="symptom" rows="4" class="p-2.5 w-1/3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="Details...">{{$result->symptoms}}</textarea>

    <label for="message" class="mt-10 text-left block mb-2 text-sm font-medium text-gray-900 dark:text-black">Prescription</label>
    <textarea name="prescription" rows="4" class="p-2.5 w-1/3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="Details...">{{$result->prescription}}</textarea>

    <button type="submit" class=" mt-10 inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
        Submit
    </button>
    </div>
    </form>

@endsection



