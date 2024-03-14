<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;

    /* protected $fillable = [
        'title',
        'description',
        'priority',
        'start_date',
        'end_date'
    ]; */

    public function project() 
    {
        return $this->belongsTo(project::class, 'project_id');
    }
}
