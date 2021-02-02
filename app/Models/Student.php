<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['npm', 'name', 'gender', 'place_of_birth','birthday', 'address','phone_number'];

}
