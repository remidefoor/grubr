<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    // TODO refine model

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_uuid',
        'date',
        'opponent_club_id',
        'team_goals',
        'opponent_goals',
        'personal_goals',
        'seven_meter_throws',
        'played_minutes'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function club() {
        return $this->belongsTo(Club::class);
    }
}
