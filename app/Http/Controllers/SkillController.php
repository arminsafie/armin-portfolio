<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "مدریت مهارت";
        $items = Skill::query()->orderBy("id", "desc")->paginate(10);
        return view("admin.skill.index", compact("title", "items"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "اضافه کردن مهارت ";
        return view("admin.skill.form", compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( SkillRequest $request)
    {
        Skill::query()->create($request->all());
        return redirect()->route("admin.skill.index");
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "ویرایش مهارت";
        $item = Skill::query()->findorfail($id);
        return view("admin.skill.form", compact("item","title"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $skill->update($request->all());
        return redirect()->route("admin.skill.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::query()->findOrFail($id)->delete();
        return redirect()->route("admin.skill.index");
    }
}
