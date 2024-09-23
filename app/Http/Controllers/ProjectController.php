<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $now = Carbon::now();

        $currentProjects = Project::whereNull('ending_at')
            ->orWhere('ending_at', '>', $now)
            ->paginate(4);

        $completedProjects = Project::where('ending_at', '<=', $now)
            ->paginate(4);

        return view('projects.index', compact('currentProjects', 'completedProjects'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::findOrFail($id);

        $images = $project->getMedia('project_images');
        $currentTime = Carbon::now();

        if ($project->ending_at) {
            $endingAt = Carbon::parse($project->ending_at);
        } else {
            $endingAt = Carbon::parse($project->starting_at)->addYear();
        }

        $startedAt = Carbon::parse($project->starting_at);

        if ($currentTime >= $endingAt) {
            $progress = 100;
        } else {
            $progress = ($currentTime->diffInSeconds($startedAt) / $endingAt->diffInSeconds($startedAt)) * 100;
            $progress = round($progress, 2);
        }

        return view('projects.show', compact('project', 'images', 'progress'));
    }
    public function showProject()
    {
        $now = Carbon::now();

        $currentProject = Project::with('media')
            ->where('is_featured', true)
            ->get();


        $projects = Project::with('media')
            ->where('ending_at', '<=', $now)
            ->get();

        $images = $currentProject->flatMap(function ($project) {
            return $project->getMedia('project_images');
        });

        $projectimages = $projects->flatMap(function ($project) {
            return $project->getMedia('project_images');
        });

        return view('welcome', compact('currentProject', 'images', 'projects', 'projectimages'));
    }
}
