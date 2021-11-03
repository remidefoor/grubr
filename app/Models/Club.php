<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    // TODO refine model

    public function users() {
        return $this->hasMany(User::class);
    }

    public function statistics() {
        return $this->hasMany(Statistic::class, 'opponent_club_id');
    }
}
