@extends('layouts.app')

@section('content')
<div class="vf-main">

    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="title">
            <h1>create</h1>
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
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Enter Name">
                    </li>


                <li class="vf-item">description</li>
                <li class="list-group-item"><input id="description" type="text" class="form-control" name="description"></li>
                <li class="vf-item">date</li>
                <li class="list-group-item"><input id="creation_date" name="creation_date" class="form-control" type="text"></li>
                <li class="vf-item">category</li>
                <li class="list-group-item">
                    <select class="form-label p-2" name="" id="">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                        <option value="">{{$category->name}}</option>
                        @endforeach




                    </select>
                </li>
            </ul>
        </div>
    </form>
</div>
@endsection
