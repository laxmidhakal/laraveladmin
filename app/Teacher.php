<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
     protected $fillable = [
        'fullname', 'address','phone','salary'
    ];
}
