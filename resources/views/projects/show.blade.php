@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>

        <hr>
        <p>{{ $project->description }}</p>

        <ul>
            <li>
                {{ $project->languages }}
            </li>
            <li>
               {{ $project->n_stakeholders }}
            </li>
            <li>
                {{ $project->year }}
            </li>
            <li>
                {{ $project->git_link }}
            </li>
        </ul>
        <a class="btn btn-danger" href="{{ route('admin.projects.index') }}">Back</a>
    </div>    
@endsection