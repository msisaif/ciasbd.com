<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory, SoftDeletes;

    const TYPE_ARRAY = [
        1 => "Video",
        2 => "Quiz",
        3 => "File",
    ];

    protected $casts = [
        "body" => "json",
    ];
    
    protected $guarded = [];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
