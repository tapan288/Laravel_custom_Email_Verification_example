<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    protected $fillable = [
        'token',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
