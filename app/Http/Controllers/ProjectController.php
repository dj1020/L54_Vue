<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.create', [
            "projects" => Project::all(),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
            'description' => 'required',
        ]);

        Project::forceCreate([
            'name'        => $request->name,
            'description' => $request->description,
        ]);

        return ['message' => 'Project created!'];
    }
}
