@extends('layouts.app')

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
              </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <th scope="row">{{ $projects->id }}</th>
                    <td>{{ $projects->title }}</td>
                    <td>{{ $projects->description }}</td>
                    <td>{{ $projects->languages }}</td>
                    <td>{{ $projects->n_stakeholders }}</td>
                    <td>{{ $projects->year }}</td>
                    <td>{{ $projects->git_link }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection