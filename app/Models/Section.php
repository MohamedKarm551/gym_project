<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ['title']; // List of fillable fields
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
