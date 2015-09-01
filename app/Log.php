<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = array('description');

    public function criminal() {
        return $this->belongsTo('App\Criminal');
    }
}
