<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'team',
        'leader',
        'phone_number',
        'email',
        'project_title',
        'project_description'
    ];
}
