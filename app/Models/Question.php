<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

	    protected $table = 'questions';
	      protected $guarded = array('id');

    protected $fillable = ['id', 'content','a1','a2','a3','a4','a5','a6','a7','a8','a9','a10','a11','a12'];


  public static $rules = array(
    'content' => 'required|min:5',
  );



}
