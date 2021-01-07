@extends('layouts.programs')

@section('program')

<div>
    <div class="row mt-5">
        <div class="col-md-8">
            <form action="/programs/create" method="POST">
                @csrf
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="form-group">
                            <label for="title">Title:</label><br>
                            <input type="text" class="form-control" id="title" name="title" value="UX Talk"><br>
                            <label for="ort">Room:</label><br>
                            <input type="text" class="form-control" id="ort" name="ort" value="G215"><br>
                            <label for="date">Date:</label><br>
                            <input type="date" class="form-control" id="date" name="date" value="2019-09-08"><br>
                            <label for="zeit">Time:</label><br>
                            <input type="time" class="form-control" id="zeit" name="zeit" value="09:00"><br>
                            <label for="content">Content:</label><br>
                            <textarea class="form-control" id="content" name="content" rows="5" cols="100">This Talk is about UX!</textarea><br><br>
                            <button type="submit" class="btn btn-success">Add Program item</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
