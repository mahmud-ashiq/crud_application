<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $values = [
        'title',
        'description',
        'project_url',
        'image',
        'status'
    ];
}
