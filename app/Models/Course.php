<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    const LEVEL_ARRAY = [
        1 => "Beginner",
        2 => "Intermediate",
        3 => "Advanced",
    ];

    const LANGUAGE_ARRAY = [
        1 => "Bangla", 
        2 => "English",
    ];
    
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class)
            ->wherePivotNull('deleted_at');
    }
}
