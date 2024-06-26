<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function store(Request $request)
    {
        Contact::query()->create($request->all());
        return redirect()->route('contact');
    }
}
