@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <h1>Boolfolio</h1>
        <h2>List of Projects</h2>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Languages</th>
                <th scope="col">N° of Stakeholders</th>
                <th scope="col">Year</th>
                <th scope="col">GitHub Link</th>
                <th scope="col">More</th>
              </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->languages }}</td>
                    <td>{{ $project->n_stakeholders }}</td>
                    <td>{{ $project->year }}</td>
                    <td>{{ $project->git_link }}</td>
                    <td>
                      <a class="btn btn-success" href="{{ route('admin.projects.show', ['project' => $project->slug]) }}"><i class="fa-solid fa-info"></i></a>
                      <a class="btn btn-warning" href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection