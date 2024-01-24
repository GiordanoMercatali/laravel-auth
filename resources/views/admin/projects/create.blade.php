@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        <h2 class="text-center">Create project</h2>

        <form class="mt-5" action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control " id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Description</label>
                <textarea class="form-control" id="content" rows="3" name="content">{{ old('description') }}</textarea>
            </div>  
            
            <div class="mb-3">
                <label for="languages" class="form-label">Languages</label>
                <input type="text" class="form-control " id="languages" name="languages" value="{{ old('languages') }}">
            </div>

            <div class="mb-3 ">
                <label for="title" class="form-label">N° of Stakeholders</label>
                <input type="text" class="form-control " id="n_stakeholders" name="n_stakeholders" value="{{ old('n_stakeholders') }}">
            </div>

            <div class="mb-3 ">
                <label for="year" class="form-label">Year</label>
                <input type="text" class="form-control " id="year" name="year" value="{{ old('year') }}">
            </div>

            <div class="mb-3 ">
                <label for="git_link" class="form-label">GitHub Link</label>
                <input type="text" class="form-control " id="git_link" name="git_link" value="{{ old('git_link') }}">
            </div>      
            
            <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i></button>
            <a class="btn btn-warning" href="{{ route('admin.projects.index') }}"><i class="fa-solid fa-backward"></i></a>

        </form>
    </div>
@endsection