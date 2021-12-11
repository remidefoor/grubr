<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    public function users() {
        return $this->hasMany(User::class);
    }

    public function statistics() {
        return $this->hasMany(Statistic::class, 'opponent_club_id');
    }

    public static function getOpponentClubs($uuid) {
        $user = User::find($uuid);
        return Club::where('id', '!=', $user->club->id);
    }
}
