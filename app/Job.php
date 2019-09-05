<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function events() {
    	return $this->hasMany('App\Event');
    }

    public function customer() {
    	return $this->belongsTo('App\Customer');
    }

    public function notes() {
    	return $this->hasMany('App\JobNote');
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function assigned() {
    	return $this->belongsToMany('App\User', 'assigned_users');
    }
}
