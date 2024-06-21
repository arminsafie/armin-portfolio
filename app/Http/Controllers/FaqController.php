<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "مدریت سوالات";
        $items = Faq::query()->orderBy("id", "desc")->paginate(10);
        return view("admin.faq.index", compact("title", "items"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "اضافه کردن مقاله ";
        return view("admin.faq.form", compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqRequest $request)
    {
        Faq::query()->create($request->all());
        return redirect()->route("admin.faq.index");
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "ویرایش مقاله";
        $item = Faq::query()->findorfail($id);
        return view("admin.faq.form", compact("item","title"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->update($request->all());
        return redirect()->route("admin.faq.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Faq::query()->findOrFail($id)->delete();
        return redirect()->route("admin.faq.index");
    }
}
