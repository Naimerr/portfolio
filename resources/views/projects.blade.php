@extends('master')

@section('title', 'Projects')

@section('content')
    <section class="projects">
        <div class="container">
            <h2>My Projects</h2>
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">{{ $project->description }}</p>
                                <a href="{{ $project->link }}" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@extends('master')



