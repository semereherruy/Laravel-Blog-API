<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'user_id']; // Add 'user_id' to fillable attributes

    // Define the inverse of the relationship
    public function user()
    {
        return $this->belongsTo(User::class);  // A blog belongs to a user
    }
}
