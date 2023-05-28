@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>My Projects</h1>
    <table>
        <thead class="table table-striped">
            <th>
                Title
            </th>
            <th>
                Slug
            </th>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>
                        {{$project->title}}
                    </td>
                    <td>
                        {{$project->slug}}
                    </td>
                    <td>
                        <a href="">Apri</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection