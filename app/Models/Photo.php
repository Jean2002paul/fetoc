<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['album_id', 'title', 'path'];

    // Relation: Une Photo appartient à un Album
    public function album()
    {
        return $this->belongsTo(Album::class);
    }

}
