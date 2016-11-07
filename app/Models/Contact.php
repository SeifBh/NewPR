<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Contact extends Model  {

	use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $table = 'contacts';
    protected $fillable = ['id','subject','avaible_number','content'];

    public function Reply()
    {
        return $this->hasMany('App\Models\Reply');
    }

}