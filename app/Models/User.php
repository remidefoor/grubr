<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // TODO refine model

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'uuid';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

    public function club() {
        return $this->belongsTo(Club::class);
    }

    public function statistics() {
        return $this->hasMany(Statistic::class);
    }

    public static function getEnumValues($columnName) {  // TODO read
        $arr = DB::select(DB::raw('SHOW COLUMNS FROM users WHERE Field = "'.$columnName.'"'));
        if (count($arr) == 0){
            return array();
        }

        // Pulls column string from DB
        $enumStr = $arr[0]->Type;
    
        // Parse string
        preg_match_all("/'([^']+)'/", $enumStr, $matches);
    
        // Return matches
        return isset($matches[1]) ? $matches[1] : [];
    }
}
