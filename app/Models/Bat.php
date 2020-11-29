<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bat extends Model
{
    use HasFactory;

    protected $fillable = [
        'opponent_id', 'player_id', 'pa', 'ab', 'h', '1b', '2b', '3b', 'hr', 'rbi', 'r', 'hbp', 'roe', 'fc', 'ci', 'bb', 'so'
    ];

    public function opponent()
    {
        return $this->belongsTo(Opponent::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

}
