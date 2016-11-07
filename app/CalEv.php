<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalEv extends Model
{
    	protected $table = 'event_models';
    protected $fillable = ['id','start','end'];
}
