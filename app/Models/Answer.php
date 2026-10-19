<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
      'question_id',
      'minion_id',
      'text'
    ];

    public function minion()
    {
        return $this->hasMany(Minion::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
