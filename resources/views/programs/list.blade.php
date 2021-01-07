@extends('layouts.programs')

@section('program')

<div class="row mat">
    <div class="col-12">
        <table class="tan">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>                   
                    <th>Room</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>

            <tbody>
                @foreach($programs as $program)
                <tr>      
                    <td>{{$program->id}}</td>
                    <td><a href="/programs/{{ $program->id }}">{{$program->title}}</a></td>
                    <td>{{$program->ort}}</td>
                    <td>{{$program->date}}</td>
                    <td>{{$program->zeit}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="row mat">
    <div class="col-12">
        <a class="btn btn-success" href="/programs/add">Add new item</a>
    </div>
</div>
@endsection


