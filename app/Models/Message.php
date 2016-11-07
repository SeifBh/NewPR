<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $table = 'messages';
    protected $fillable = ['id','subject','content','from','status'];

    public function Reply()
    {
        return $this->hasMany('App\Models\Reply');
    }

}
