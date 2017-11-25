<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Option;
use App\Answer;

class Question extends Model
{
    public function options(){
      return $this->hasMany('App\Option');
    }

    public function answers(){
      return $this->hasMany('App\Answer');
    }
}
