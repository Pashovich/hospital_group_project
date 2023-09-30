
@extends('layouts.dashboard')

@section('title', 'Home Page')

@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        @foreach ($appointments as $appointment)
        <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400">
                <a href="#Patient_1" class="appointment-link" data-toggle="application-info-{{$appointment->id}}">
                    {{$appointment->fname}} {{$appointment->lname}}
                </a>
                <br>
                {{$appointment->date}} {{$appointment->time}}
            </p>
        </div>
        <div class="loginPopup" >
         <div class="formPopup" id="application-info-{{$appointment->id}}" >
         <div class="px-4 sm:px-0">
         <h3 class="text-base font-semibold leading-7 text-gray-900">Applicant Information</h3>
         <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p>
         <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Name : {{$appointment->fname}} {{$appointment->lname}}</p>
         <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">gender : {{$appointment->gender}} </p>
         <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Date of Birth : {{$appointment->dob}}</p>
         <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Is maried : {{$appointment->marital_status}}</p>
         <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Is taking medicine : {{$appointment->taking_medicine}}</p>
         <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Alcoholic Type : {{$appointment->is_alcoholic}}</p>
         <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Is Smoker : {{$appointment->is_smoker}}</p>
         <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Comments : {{$appointment->is_smoker}}</p>
         <div class="absolute inset-x-0 bottom-0 h-16">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded appointment-link" data-toggle="application-info-{{$appointment->id}}">
                  Close
            </button>
            <a href="{{route('prescription', ['appointment_id' => $appointment->id])}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >
                  Make
            </a>
         </div>

         </div>
            
         </div>
   </div>
    @endforeach
</div>
@endsection



