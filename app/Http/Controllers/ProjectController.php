<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

public function projects()
{
    $projects = Project::all(); 
    return view('projects', compact('projects'));
}
