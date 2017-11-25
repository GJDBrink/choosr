<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Option;

class Option extends Model
{

    public function question(){
      return $this->belongsTo('App\Question');
    }

}
