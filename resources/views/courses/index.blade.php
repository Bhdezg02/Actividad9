{{-- What layout is gonna use --}}
@extends('layouts.plantilla')

{{-- Just for one line --}}
@section('title', 'Index')

{{-- More than one line --}}
@section('content')
    <div> 
        <h2> Estos son los objetos que nos mandó el controlador: </h2>
    </div>

@endsection
<div>

    <a class="add-course-button" href="{{ route('courses.create') }}">Add New Course</a>

    @foreach ($courses as $course)
    <ul>
        <li> {{ $course->title }} </li>
        <li> {{ $course->description }} </li>
        <li> {{ $course->language }} </li>
        <li> {{ $course->difficulty }} </li>
        <li> {{ $course->instructor }} </li>
        <li> {{ $course->email }} </li>
    </ul>
    @endforeach
</div>

@push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endpush