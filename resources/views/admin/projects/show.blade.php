@extends('layouts.app')

@section('content')

<div class="vf-main">

    <div class="title">
        <h1>show</h1>
        <div class="btn">
            <button type="button" class="btn btn-secondary"><a href="{{route('admin.projects.edit', $project)}}"><i class="fa-solid fa-pen"></a></i></button>
            <button type="button" class="btn btn-primary"><a href="{{route('admin.projects.index')}}"><i class="fa-solid fa-list"></i></a></i></button>
        </div>
    </div>

    <div class="card w-100" style="width: 18rem;">

        <ul class="list-group list-group-flush">

                <li class="vf-item">name</li>
                <li class="list-group-item">{{$project->name}}</li>


            <li class="vf-item">description</li>
            <li class="list-group-item">{{$project->description}}</li>
            <li class="vf-item">date</li>
            <li class="list-group-item">{{$project->creation_date}}</li>
        </ul>
    </div>
</div>
@endsection
