<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinyal extends Model
{
    use HasFactory;

        protected $fillable = [
        'waktu', 'signal', 'open', 'market_id', 'notif'
    ];

        public function Market()
        {
            return $this->belongsTo(Market::class);
        }
}
