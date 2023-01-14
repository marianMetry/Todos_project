@extends('layout.app')
@section('titel', 'All Todos')

@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="card w-50 m-auto">
            <div class="card-header text-center">
                <h1>All Todos List</h1>
                <a href="{{route('add')}}"> Add Todo</a>
            </div>
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif
            <div class="card-body">
                <ul class="list-group">
                    @forelse ($todos as $todo )
                    <li class="list-group-item text-muted ">
                        {{$todo->titel}}
                        <span class="pl-2">
                            <a href="/todo/{{$todo->id}}/delete">
                                <i style="float: right; color:#890202 ; padding-right:10px" class="fa-solid fa-trash"></i>
                            </a>
                        </span>
                        <span class="pl-2">
                            <a href="/todo/{{$todo->id}}/edit">
                                <i style="float: right; color:#098902 ; padding-right:10px" class="fa-regular fa-pen-to-square"></i>
                                <i ></i>
                            </a>
                        </span>
                        <span class="">
                            <a href="/todo/{{$todo->id}}">
                                <i style="float: right; color:#024389 ; padding-right:10px" class="fa-regular fa-eye "></i>
                            </a>
                        </span>
                        @if (! $todo->completed)
                            <span class="">
                                <a href="/todo/{{$todo->id}}/complete">
                                    <i style="float: right; color:#f3cc09 ; padding-right:10px" class="fa-solid fa-calendar-check"></i>
                                </a>
                            </span>
                        @endif

                    </li>
                    @empty
                    <p class="text-center">No Todos</p>
                    @endforelse
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection



