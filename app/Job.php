<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   	protected $table = 'jobs';
	protected $primaryKey = "id";
	public $timestamps = false;

	const CREATED_AT = "created_at";
	const UPDATED_AT = "last_update";
}
