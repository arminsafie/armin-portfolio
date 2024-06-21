<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Skill;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function resume()
    {
        $items = Resume::query()->get();
        $skills = Skill::query()->get();
        $languages = Language::query()->get();
        return view('user.resume',compact('items',"skills","languages"));
    }

    public function projects()
    {
        $items = Project::query()->get();
        return view("user.projects" , compact('items'));
    }
    public function contact()
    {
        return view('user.contact');
    }
}

