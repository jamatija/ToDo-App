<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status'];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::addGlobalScope(new \App\Scopes\UserTaskScope);
    }

}
