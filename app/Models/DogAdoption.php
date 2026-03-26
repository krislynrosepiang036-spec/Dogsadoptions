<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DogAdoption extends Model
{
    use HasFactory;

    protected $fillable = [
        'dog_name', 'user_name', 'email', 'phone', 'reason', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}