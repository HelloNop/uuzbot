<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'candle'
    ];

    public function sinyals()
        {
            return $this->hasMany(Sinyal::class);
        }
}
