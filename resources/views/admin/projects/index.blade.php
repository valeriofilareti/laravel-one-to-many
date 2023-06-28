@extends('layouts.app')
@section('content')

<main class="index-main float-end">
    <div class="title d-flex justify-content-between">
        <h1>Elenco progetti</h1>
        <div class="btn">
            <button type="button" class="btn btn-primary"><a href="{{route('admin.projects.create')}}"><i class="fa-solid fa-plus"></i></i></a></i></button>
        </div>
    </div>

    <table class="table table-hover w-100">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th style="min-width: 130px" scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)

                <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->name}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->category->name}}</td>
                    <td>{{$project->creation_date}}</td>
                    <td>
                        <div class="btn d-flex">
                            <button type="button" class="btn btn-primary"><a href="{{route('admin.projects.show', $project)}}"><i class="fa-solid fa-eye"></i></a></button>
                            <button type="button" class="btn btn-secondary"><a href="{{route('admin.projects.edit', $project)}}"><i class="fa-solid fa-pen"></i></a></button>
                            <form action="{{route('admin.projects.destroy', $project)}}" method="POST" onsubmit="return confirm('confermi?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>

                @endforeach

        </tbody>
    </table>
</main>

@endsection
