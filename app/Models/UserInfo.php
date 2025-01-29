<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'user_id',
        'phone_number',
        'address',
        'em_name',
        'em_phone'
    ];


    public function  user()  {
        return $this->belongsTo(User::class, 'user_id');
    }
}
