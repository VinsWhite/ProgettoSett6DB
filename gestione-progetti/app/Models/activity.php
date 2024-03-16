<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'priority',
        'start_date',
        'end_date',
        'projects_id', 
    ];

    public function project() 
    {
        return $this->belongsTo(Project::class, 'projects_id'); 
    }
}
