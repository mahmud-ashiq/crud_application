<?php

namespace App\Http\Controllers;

use App\Models\Project;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProjectController extends Controller
{
    public function create(Request $request)
    {
        $project = new Project;

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'project_url' => 'nullable|url',
            'image' => 'required|image|max:1024',
            'status' => 'required|in:draft,published'
        ]);

        $imageName = null;
        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $project->title = $request->title;
        $project->description = $request->description;
        $project->project_url = $request->project_url;
        $project->image = $imageName;
        $project->status = $request->status;

        $project->save();
        return redirect()->route('home')->with('success', 'Added');
    }

    public function viewProject($id)
    {
        $project = Project::findOrFail($id);
        return view('view', ['project' => $project]);
    }

    public function editProject($id)
    {
        $project = Project::findOrFail($id);
        return view('edit', ['project' => $project]);
    }

    public function updateProject($id, Request $request)
    {
        $project = Project::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'project_url' => 'nullable|url',
            'image' => 'nullable|image|max:1024',
            'status' => 'required|in:draft,published'
        ]);


        // If a new image is uploaded
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $project->image = $imageName;
        }

        $project->title = $request->title;
        $project->description = $request->description;
        $project->project_url = $request->project_url;
        $project->status = $request->status;

        $project->save();

        return redirect()->route('home')->with('success', "Updated");
    }
}