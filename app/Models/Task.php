<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',           // Add this
        'title',
        'description',
        'long_description',
        'completed'          // Add this too if you're using it
    ];

    public function toggleComplete()
    {
        $this->completed = !$this->completed;
        $this->save();
    }
}
