<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id',
        'minion_id',
        'path'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function minion()
    {
        return $this->belongsTo(Minion::class);
    }
}
