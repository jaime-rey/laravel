<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function getUser() {
        return $this->belongsTo('App\User');
    }

    public function getTitle(){
        return $this->title;
    }
}
