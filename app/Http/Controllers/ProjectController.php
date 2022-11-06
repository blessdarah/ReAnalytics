<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        Config::set('app.page', 'projects');
        return view('projects.index')->withProjects(Project::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(ProjectRequest $request)
    {
        $data = $request->validated();

        if (request()->hasFile('image')) {
            $data['image'] = request()->file('image')->move('images');
        }

        Project::create($data);
        return redirect()->route('projects.index')->withToastSuccess('Your new project has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @return Response
     */
    public function show(Project $project)
    {
        return view('projects.show')->withProject($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit')->withProject($project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @return Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $data = $request->validated();

        if (request()->hasFile('image')) {
            Storage::delete($project->image);
            $data['image'] = request()->file('image')->move('images');
        }

        $project->update($data);
        return redirect()->route('projects.index')->withToastSuccess('This project has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return Response
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();
        return redirect()->route('projects.index')->withToastSuccess('This project has been deleted successfully');
    }
}
