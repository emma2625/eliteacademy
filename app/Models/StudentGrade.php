<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentGrade extends Model
{
    protected $fillable = [
        'user_id',
        'grade_id'
    ];

    public function  user()  {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function  grade()  {
        return $this->belongsTo(Grade::class, 'grade_id');
    }
}
