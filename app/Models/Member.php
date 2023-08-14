<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends User
{
// Member extends User 
    use HasFactory;
    protected $table = 'users';
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    
    
}
