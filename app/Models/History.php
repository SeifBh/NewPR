<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
	protected $table = 'history';
protected $fillable =  ['id','user_id','survey_id','q1_r','q2_r','q3_r','q4_r','q5_r','q6_r','q7_r','q8_r','q9_r','q10_r','space1','space2','space3','space4','space5'];


	public function survey()
    {
        return $this->belongsTo('Survey', 'survey_id');
    }
}
