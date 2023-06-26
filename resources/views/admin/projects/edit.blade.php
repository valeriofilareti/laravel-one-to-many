@extends('layouts.app')

@section('content')

<div class="vf-main">

    <form action="{{ route('admin.projects.update', $project) }}" method="POST">

        @csrf
        @method('PUT')
        <div class="title">
            <h1>edit</h1>
            <div class="btn">
                <button type="submit" class="btn btn-success">
                    <a href=""><i class="fa-solid fa-check"></i></i></a>
                </button>
                <button type="button" class="btn btn-primary">
                    <a href="{{route('admin.projects.index')}}"><i class="fa-solid fa-list"></i></a>
                </button>
            </div>
        </div>

        <div class="card w-100" style="width: 18rem;">

            <ul class="list-group list-group-flush">

                    <li class="vf-item">name</li>
                    <li class="list-group-item">
                        <input value="{{old('name', $project->name)}}" name="name" type="text" class="form-control @error('title') is-invalid @enderror"  placeholder="Enter Title">
                    </li>


                <li class="vf-item">description</li>
                <li class="list-group-item"><input class="form-control" value="{{old('description', $project->description)}}" name="description"></li>
                <li class="vf-item">date</li>
                <li class="list-group-item"><input value="{{old('creation_date', $project->creation_date)}}"  class="form-control" type="text"></li>
            </ul>
        </div>
    </form>
</div>
@endsection
