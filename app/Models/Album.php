<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description'];

    // Relation: Un Album a plusieurs Photos
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
