<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
    ];
    protected $table = 'teachers';

    // public function course(Course $course)
    // {
    //     $this->hasMany($course)
    //     $this->belongsTo($teacher)
    // }

    // $teacher->course
    // $course->teacher
}
