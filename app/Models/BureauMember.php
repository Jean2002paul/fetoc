<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BureauMember extends Model
{
    //
    use HasFactory;
    protected $fillable = ['name', 'position', 'photo_path', 'order'];
}
