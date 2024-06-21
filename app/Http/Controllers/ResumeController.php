<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeRequest;
use App\Models\resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "مدریت رزومه ها";
        $items = Resume::query()->orderBy("id", "desc")->paginate(10);
        return view('admin.resume.index', compact('title', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "اضافه کردن رزومه ";
        return view("admin.resume.form", compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResumeRequest $request)
    {

        Resume::query()->create($request->all());
        return redirect()->route("admin.resume.index");
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "ویرایش رزومه";
        $item = Resume::query()->findorfail($id);
        return view("admin.resume.form", compact("item","title"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        $resume->update($request->all());
        return redirect()->route("admin.resume.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Resume::query()->findOrFail($id)->delete();
        return redirect()->route("admin.resume.index");
    }
}
