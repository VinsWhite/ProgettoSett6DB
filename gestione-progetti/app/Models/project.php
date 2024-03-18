<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'scope',
        'deadline',
        'users_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function activities(): HasMany {
        return $this->hasMany(Activity::class);
    }
}
