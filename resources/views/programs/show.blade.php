@extends('layouts.programs')

@section('program')
<div class="row mat">
    <div class="col-2">
        <label for="title">Title:</label>
    </div>
    <div class="col-10">
        {{ $program->title}}
    </div>
</div>

<div class="row ">
    <div class="col-2">
        <label for="ort">Room:</label>
    </div>
    <div class="col-10">
        {{ $program->ort}}
    </div>
</div>

<div class="row ">
    <div class="col-2">
        <label for="date">Date:</label>
    </div>
    <div class="col-10">
        {{ $program->date}}
    </div>
</div>

<div class="row ">
    <div class="col-2">
        <label for="zeit">Time:</label>
    </div>
    <div class="col-10">
        {{ $program->zeit}}
    </div>
</div>

<div class="row ">
    <div class="col-2">
        <label for="content">Content:</label>
    </div>
    <div class="col-10">
        {{ $program->content}}
    </div>
</div>

<div class="row mat">
    <div class="col-12">
       <a class="btn btn-primary" href="/programs/{{$program->id}}/edit">Edit</a>
       <a class="btn btn-danger" href="/programs/{{ $program->id }}/delete">Delete</a>
    </div>
</div>

@endsection
