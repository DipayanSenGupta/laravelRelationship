<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected $fillable = ['employee_name','amount'];
	public function transactions() {
		return $this->hasMany('App\Transaction','spouse_foreign_id','spouse_local_id');
	}
}
