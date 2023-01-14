@extends('layout.app')
@section('titel' , 'add todo')

@section('content')

<div class="container  ">
    <div class="row justify-content-center py-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Create anew todo</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('store')}}" method="POST">
                        @csrf
                        <div class="mb-3 form-group">
                            <input name="titel" value="{{old('titel')}}" type="text" class="form-control" placeholder="titel">
                                @error('titel')
                                    <span class="alert text-danger">{{$message}}</span>
                                @enderror
                        </div>
                        <div class="mb-3 form-group">
                            <textarea name="desc" value="{{old('desc')}}" class="form-control" placeholder="Leave a Description here"  style="height: 100px"></textarea>
                            @error('desc')
                            <span class="alert text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-50 ">Add Todo</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
