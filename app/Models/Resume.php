<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "body",
        "city",
        "startDate",
        "endDate",
        "grade",
        "type",
        "company"
    ];
}
