<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Option;

class Answer extends Model
{

    public function option(){
      return $this->belongsTo('App\Option');
    }

    public function question(){
      return $this->belongsTo('App\Question');
    }

}
