<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolment extends Model
{
    use HasFactory;


    protected $fillable = [
        'users_id',
        'courses_id'
    ];


    /**
     * Get all of the User for the Enrolment
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function User()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }


    /**
     * Get all of the User for the Enrolment
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function Course()
    {
        return $this->hasOne(Course::class, 'id', 'courses_id');
    }
}
