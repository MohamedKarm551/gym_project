<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainers';
    protected $fillable = [
        'name',
        'email',
        'password'        
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
