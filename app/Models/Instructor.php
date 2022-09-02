<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instructor extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;
    
    protected $guarded = [];

    public function courses()
    {
        return $this->belongsToMany(Course::class)
            ->wherePivotNull('deleted_at');
    }
}
