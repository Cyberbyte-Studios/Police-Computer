<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    protected $fillable = array('crime', 'description', 'bounty', 'active');

    public function criminal() {
        return $this->belongsTo('App\Criminal');
    }
}
