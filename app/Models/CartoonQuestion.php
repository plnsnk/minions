<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartoonQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'sort'
    ];

    public function answersCartoon() {
        return $this->hasMany(CartoonAnswer::class);
    }

}
