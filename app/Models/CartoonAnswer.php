<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartoonAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_id',
        'minion_id',
        'text'
    ];

    public function cartoons()
    {
        return $this->hasMany(Cartoon::class);
    }

    public function questionCartoon()
    {
        return $this->hasMany(Question::class);
    }
}
