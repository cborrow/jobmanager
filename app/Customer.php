<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function jobs() {
    	return $this->hasMany('App\Job');
    }
}
