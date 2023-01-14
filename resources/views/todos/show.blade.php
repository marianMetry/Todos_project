@extends('layout.app')
@section('titel' , 'todo - '. $todo->id)

@section('content')
<div class="container">
    <h1 class="text-center pt-5">{{$todo->titel}}</h1>

    <div class="row pt-5 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>Details</span>
                    <span style="float: right"  class="badge bg-warning text-dark">{{boolval($todo->completed)?' completed': 'Not Completed'}}</span>
                </div>
                <div class="card-body">
                    {{$todo->description}}
                    <button style="float: right" class="btn btn-outline-primary"> <a style="text-decoration: none" href="/todo">Back</a></button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection








