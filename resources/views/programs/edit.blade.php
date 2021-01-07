@extends('layouts.programs')

@section('program')
<form action="/programs/{{ $program->id }}/update" class="mat" method="POST">
    @csrf
    <input type="hidden" id="id" name="id" value="{{ $program->id }}">
    <div class="row">
        <div class="col-2">
            <label for="title">Title:</label>
        </div>
        <div class="col-10">
            <input type="text" id="title" name="title" value="{{ $program->title}}">
        </div>
    </div>

    <div class="row ">
        <div class="col-2">
            <label for="ort">Room:</label>
        </div>
        <div class="col-10">
            <input type="text" id="ort" name="ort" value="{{ $program->ort}}">
        </div>
    </div>

    <div class="row ">
        <div class="col-2">
            <label for="date">Date:</label>
        </div>
        <div class="col-10">
            <input type="date" id="date" name="date" value="{{ $program->date}}">
        </div>
    </div>

    <div class="row ">
        <div class="col-2">
            <label for="zeit">Time:</label>
        </div>
        <div class="col-10">
            <input type="time" id="zeit" name="zeit" value="{{ $program->zeit}}">
        </div>
    </div>

    <div class="row ">
        <div class="col-2">
            <label for="content">Content:</label>
        </div>
        <div class="col-10">
            <textarea id="content" name="content" rows="5" cols="100">{{ $program->content}}</textarea>
        </div>
    </div>
    <br>


    <div class="row ">
        <div class="offset-2 col-10">
            <input class="btn btn-success" type="submit" value="Save">
        </div>
    </div>
    <br>

</form>
@endsection
