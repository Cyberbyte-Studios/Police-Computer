<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criminal extends Model
{
    protected $fillable = array('pID', 'name');

    public function crimes() {
        return $this->hasMany('App\Crime');
    }
}
