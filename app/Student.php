<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function fees(){
        $this->hasMany(Fee::class);
    }
}
