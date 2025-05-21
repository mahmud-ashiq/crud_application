<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    //
    use HasFactory;
    protected $values = [
        'title',
        'description',
        'project_url',
        'image',
        'status'
    ];
}
