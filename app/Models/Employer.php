<?php

namespace App\Models;

// Don't need to declare use if model is in the same namespace.
// use App\Models\User;
// use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
