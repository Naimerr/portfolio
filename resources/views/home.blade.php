@extends('master')

@section('title', 'Home')

@section('content')
<section class="hero">
        <div class="hero-content">
            <h1>Welcome to My Portfolio</h1>
            <p>Hello, I'm setu sultana.</p>
            <a href="#skills" class="btn btn-primary">View My Skills</a>
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="container">
            <h2>My Skills</h2>
            <p>Here's a brief summary of my skills:</p>
            <ul>
                <li>Skill 1</li>
                <li>Skill 2</li>
            </ul>
        </div>
    </section>
@endsection
