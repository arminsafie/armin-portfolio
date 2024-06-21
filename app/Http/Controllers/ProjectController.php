<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "مدریت پروژه ها";
        $items = Project::query()->orderBy("id", "desc")->paginate(10);
        return view('admin.project.index', compact('title', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "اضافه کردن پروژه ";
        return view("admin.project.form", compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        Project::query()->create($request->all());
        return redirect()->route("admin.project.index");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "ویرایش مقاله";
        $item = Project::query()->findorfail($id);
        return view("admin.project.form", compact("item","title"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return redirect()->route("admin.project.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::query()->findOrFail($id)->delete();
        return redirect()->route("admin.project.index");
    }
}
