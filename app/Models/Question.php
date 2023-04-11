<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    protected $fillable = ['content', 'answer', 'quiz_id'];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
