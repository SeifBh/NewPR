<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
	protected $table = 'reply';
    protected $fillable = ['user_id','msg_id'];

    public function Message()
    {
        return $this->hasMany('App\Models\Reply');
    }

    public function Contact()
    {
        return $this->hasMany('App\Models\Reply');
    }
}
