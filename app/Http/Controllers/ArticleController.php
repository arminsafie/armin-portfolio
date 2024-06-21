<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "مدریت مقالات";
        $items = Article::query()->orderBy("id", "desc")->paginate(10);
        return view("admin.article.index", compact("title", "items"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "اضافه کردن مقاله ";
        return view("admin.article.form", compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        Article::query()->create($request->all());
        return redirect()->route("admin.article.index");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id )
    {
        $title = "ویرایش مقاله";
        $item = Article::query()->findOrFail($id);
        return view("admin.article.form", compact("title", "item"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return redirect()->route("admin.article.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::query()->findOrFail($id)->delete();
        return redirect()->route("admin.article.index");
    }
}
